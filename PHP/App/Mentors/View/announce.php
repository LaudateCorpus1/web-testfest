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
