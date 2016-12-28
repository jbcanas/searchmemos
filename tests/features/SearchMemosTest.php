<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchMemosTest extends TestCase
{
    public function test_can_create_a_memo()
    {
	    $memo = factory(Memo::class)->create([
	    	'title' => 'Update on Clean Water State Revolving Fund Loan for Regional Wastewater Facility Projects',
	    	'date' => Carbon::parse('December 16, 2016'),
	    	'content' => 'On June 2, 2015, Council approved the San Jose Santa Clara Regional Wastewater Facility'
	    ]);
dd($memo);
        $this->assertTrue(! empty($memo));
    }
}
