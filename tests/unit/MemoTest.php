<?php

use App\Models\Memo;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class MemoTest extends TestCase
{
	use DatabaseMigrations;

	public function test_can_run_scraper()
    {
    	
    }

    public function test_can_create_a_memo()
    {
	    $memo = factory(Memo::class)->create();

        $this->assertTrue(! empty($memo));
    }
}
