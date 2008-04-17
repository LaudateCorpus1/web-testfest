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
