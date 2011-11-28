<?php if (count($results) == 0): ?>
  This combination didn't work. Refresh to try again.
<?php endif; ?>

<table>
  <thead>
    <th>Your Name</th>
    <th>gets a gift for</th>
  </thead>
  <?php foreach ($results as $a => $b): ?>
  <tr>
    <td><?php print $a; ?></td>
    <td><?php print $b; ?></td>
  </tr>
  <?php endforeach; ?>
</table>
