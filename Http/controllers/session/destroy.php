<?php

// log the user out.
new \Core\Authenticator()->logout();

header("location: /");
exit();