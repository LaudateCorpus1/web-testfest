<div id="header">
 <h1></h1><br /><br />
 <div id="menu">
  <ul id="nav">
   <li><a href="/mentors/my">My Account</a></li>
   <li><a href="/mentors/review">Test Review</a></li>
   <li><a href="/mentors/livetest">Live Testing Area</a></li>
   <li class="activeLink"><a href="/mentors/announce">Announcements</a></li>
  </ul>
 </div>
</div>
<div id="content">
<div id="right">
 <h2>Mentors area</h2>
    <?php
    echo $this->form()
          ->text(array(
                'name'    => 'title',
                'label'   => 'Title',
          ))
          ->textarea(array(
                'name'    => 'announcement',
                'label'   => 'Text of announcement',
                'attribs' => array(
                    'rows'    => '10',
                    'cols'    => '80',
                ),
          ))
          ->submit(array(
                'name'    => 'process',
                'value'   => $this->getTextRaw('PROCESS_SAVE'),
          ))
          ->fetch();
?>
 </div>
</div>
