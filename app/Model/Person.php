<?php

class Person extends AppModel {
  public $name = 'Person';

  public $hasAndBelongsToMany = array(
         'GiftCombination' =>
             array(
                 'className'              => 'Person',
                 'joinTable'              => 'combinations',
                 'with'                   => 'Combination',
                 'foreignKey'             => 'sender_id',
                 'associationForeignKey'  => 'receiver_id',
                 'unique'                 => true,
                 'conditions'             => '',
                 'fields'                 => '',
                 'order'                  => '',
                 'limit'                  => '',
                 'offset'                 => '',
                 'finderQuery'            => '',
                 'deleteQuery'            => '',
                 'insertQuery'            => ''
             )
     );
  
}
