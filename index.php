<h2>Your Reminders</h2>
<a href="<?=URLROOT;?>/notes/create" class="btn btn-primary">➕ New</a>
<ul class="list-group mt-3">
  <?php foreach($data['notes'] as $note): ?>
    <li class="list-group-item d-flex justify-content-between">
      <span>
        <?=htmlspecialchars($note->subject);?>
        <?php if($note->completed): ?>
          <span class="badge bg-success">✔</span>
        <?php endif; ?>
      </span>
      <span>
        <a href="<?=URLROOT;?>/notes/edit/<?=$note->id;?>" class="btn btn-sm btn-warning">Edit</a>
        <a href="<?=URLROOT;?>/notes/delete/<?=$note->id;?>" class="btn btn-sm btn-danger">Delete</a>
      </span>
    </li>
  <?php endforeach; ?>
</ul>
