<div id="header">
 <h1></h1><br /><br />
 <div id="menu">
  <ul id="nav">
   <li class="activelink"><a href="/mentors/my">My Account</a></li>
   <li><a href="/mentors/review">Test Review</a></li>
   <li><a href="/mentors/livetest">Live Testing Area</a></li>
   <li><a href="/mentors/announce">Announcements</a></li>
  </ul>
 </div>
</div>
<div id="content">
<div id="right">
 <h2>Mentors area</h2>
    <?php
    echo $this->form()
          ->text(array(
                'name'    => 'handle',
                'label'   => 'Username',
          ))
          ->password(array(
                'name'    => 'passwd',
                'label'   => 'Password',
          ))
          ->submit(array(
                'name'    => 'process',
                'value'   => $this->getTextRaw('PROCESS_LOGIN'),
          ))
          ->fetch();
?>

 </div>
</div>
