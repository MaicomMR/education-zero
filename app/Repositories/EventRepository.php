<?php


namespace App\Repositories;


use App\Event;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{
    protected $model;

   public function __construct(Event $model)
   {
       parent::__construct($model);
   }

   public function getAll()
   {
       return parent::getAll();
   }

   public function getById($id)
   {
       return parent::getById($id);
   }

   public function create(array $data)
   {
       return parent::create($data);
   }

   public function update($id, array $data)
   {
       return parent::update($id, $data);
   }

   public function delete($id)
   {
       return parent::delete($id);
   }
}