<?php

class PeopleController extends AppController {
  public $helpers = array ('Html','Form');
  public $name = 'People';
  public $components = array('Session');

  public $scaffold;
  
  public function make_list() {
    $people = array();
    $sort = array();
    $results = $this->Person->find('all');
    foreach ($results as $result) {
      $to = array();
      $possible_recipients = count($result['GiftCombination']);
      $sort[$result['Person']['id']] = $possible_recipients;
      foreach ($result['GiftCombination'] as $combo) {
        $to[] = $combo['id'];
      }
      $people[$result['Person']['id']] = array(
        'name' => $result['Person']['name'],
        'recipients' => $to,
        'combos' => $possible_recipients,
      );
    }
    asort($sort);
    
    $done = array();
    $gets = array();
    // $gets[a] gets a gift for => b
    foreach ($sort as $id => $combos) {
      $choices = array_diff($people[$id]['recipients'], $done);
      if (count($choices) == 0) {
        $gets = array();
        break;
      }
      $final_choice = $choices[array_rand($choices)];
      $gets[$people[$id]['name']] = $people[$final_choice]['name'];
      $done[] = $final_choice;
    }
    
    $this->Set('results', $gets);
  }
}
