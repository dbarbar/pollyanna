<?php if (count($results) == 0): ?>
  This combination didn't work. Refresh to try again.
<?php endif; ?>

<table>
  <thead>
    <th>Your Name</th>
    <th>gets a gift for</th>
    <th>Max. Possible choices</th>
    <th>Max. Possible choices at your turn</th>
    <th>Valid Drawing Choices at your turn</th>
  </thead>
  <?php foreach ($results as $a => $b): ?>
  <tr>
    <td><?php print $a; ?></td>
    <td><?php print $b; ?></td>
    <td><?php print $original_number_of_possible_choices[$a]; ?></td>
    <td><?php print count($possible_choices[$a]); ?></td>
    <td><?php print implode(', ', $possible_choices[$a]); ?>

  </tr>
  <?php endforeach; ?>
</table>

<?php print $this->Html->Link('Edit People and who they are allowed to give gifts to', array('controller' => 'people', 'action' => 'index')); ?>
