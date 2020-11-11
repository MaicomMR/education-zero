<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\EventController;
use App\Event;

class EventTest extends TestCase
{
    use RefreshDatabase;
    /**
    * @test
    */
    public function index_should_return_all_events_on_the_db()
    {
        /* $test = $this->app()->make('App\Http\Controllers\EventController'); */
        /* dd($test); */

        /* $eventRepository =  $this->getMockBuilder('EventRepository'); */
        $event = factory(Event::class)->create();

        $storiesController =  $this->getMockBuilder(EventController::class)
            ->disableOriginalConstructor()
            ->setMethods(['index'])
            ->getMock();

        dd($storiesController->index());
    }
}
