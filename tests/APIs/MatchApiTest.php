<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Match;

class MatchApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_read_match()
    {
        $match = factory(Match::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/matches/'.$match->id
        );

        $this->assertApiResponse($match->toArray());
    }
}
