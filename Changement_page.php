<?php 
  echo '<p class="page" ><a href="*"><-</a>';
  if($pageActuel > 2)
    echo '<a href="*"> 1 </a>';

  if($pageActuel > 3)
    echo '...';

  if($pageActuel>1)
    echo '<a href="*">'. ($pageActuel-1) .' </a>';

  echo '<a href="*" class="page_actuel">'. $pageActuel .' </a>';
            
  if($pageActuel < $nbpage)
    echo'<a href="*">'. ($pageActuel+1) .' </a>';

  if($pageActuel < $nbpage - 2)
    echo'...';

  echo'<a href="*">'. $nbpage.' </a><a href="*">-></a></p>';
?>