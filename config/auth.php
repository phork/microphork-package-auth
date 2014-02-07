<?php
    return array(
        'auth'              => array(
            'handlers'          => array(
                'spoofed'           => array(
                    'active'            => false,
                    'class'             => '\Phork\Pkg\Auth\Spoofed',
                    'params'            => array(
                        'userid'            => 1,
                        'username'          => 'phork',
                        'authenticated'     => true,
                        'token'             => 'abc123'
                    )
                )
            )
        )
    );