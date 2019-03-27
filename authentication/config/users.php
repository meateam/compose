
<?php
$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        'tal:yonatan' => array(
            'id' => array('yonatan@gmail'),
            'givenName' => 'Yonatan',
            'surName' => 'Tal',
            'mail' => 'yonatan@gmail.com'
        ),
        'tiki:poor' => array(
            'id' => array('nitro@jello'),
            'givenName' => 'Tiki',
            'surName' => 'Poor',
            'mail' => 'nitro@jello'
        )
    )
);