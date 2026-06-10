<?php

use App/Http/Controller/Api/ApiController; 

route::get("/api/ping", [PingController::class, "ping"]);
