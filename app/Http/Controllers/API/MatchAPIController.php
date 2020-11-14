<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMatchAPIRequest;
use App\Http\Requests\API\UpdateMatchAPIRequest;
use App\Models\Match;
use App\Repositories\MatchRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class MatchController
 * @package App\Http\Controllers\API
 */

class MatchAPIController extends AppBaseController
{
    /** @var  MatchRepository */
    private $matchRepository;

    public function __construct(MatchRepository $matchRepo)
    {
        $this->matchRepository = $matchRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/matches",
     *      summary="Get a listing matches with details based on season year and week number.",
     *      tags={"Match"},
     *      description="Get all Matches",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="year",
     *          description="season year",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="week_num",
     *          description="week number",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Match")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $matches = $this->matchRepository->seasons(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit'),
            ['matches.id','matches.title','matches.description','matches.title_ar','matches.description_ar','matches.image','matches.video','year','week_num']
        );

        return $this->sendResponse($matches->toArray(), 'Matches retrieved successfully');
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/seasonMatches",
     *      summary="Get a listing of the Matches grouped by season.",
     *      tags={"Match"},
     *      description="Get all Matches",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Match")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function seasonMatches(Request $request)
    {
        $matches = $this->matchRepository->seasons(
            [],
            $request->get('skip'),
            $request->get('limit'),
            ['matches.id','matches.title','matches.description','matches.title_ar','matches.description_ar','matches.image','matches.video','year','week_num']
        )->groupBy('year');

        return $this->sendResponse($matches->toArray(), 'Matches retrieved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/matches/{id}",
     *      summary="Display the specified Match with its details by ID.",
     *      tags={"Match"},
     *      description="Get Match",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Match",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Match"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Match $match */
        $match = $this->matchRepository->find($id);

        if (empty($match)) {
            return $this->sendError('Match not found');
        }

        return $this->sendResponse($match->toArray(), 'Match retrieved successfully');
    }
}
