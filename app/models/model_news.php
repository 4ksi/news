<?php
class Model_News extends Model
{
    public function get_data()
    {   
        return array(
            array(
                'Title' => 'Lorem #1',
                'Date' => '12.12.2012',
                'Anounce' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae libero sapiente labore inventore...',
                'Full' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque temporibus explicabo reprehenderit, id quo? Aperiam aliquam odit quisquam odio, sit facilis perspiciatis omnis aut illum eveniet eaque, quas deserunt eligendi.'
            ),
            array(
                'Title' => 'Ipsum #2',
                'Date' => '12.12.2012',
                'Anounce' => 'Explicabo reprehenderit, id quo? Aperiam aliquam odit quisquam odio, sit facilis perspiciatis omnis ',
                'Full' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque temporibus explicabo reprehenderit, id quo? Aperiam aliquam odit quisquam odio, sit facilis perspiciatis omnis aut illum eveniet eaque, quas deserunt eligendi.'
            ),
            // todo
        );
    }
}
?>