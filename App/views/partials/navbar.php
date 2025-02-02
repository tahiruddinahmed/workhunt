<?php

use Framework\Authorization;
use Framework\Session;

?>
    <!-- Nav -->
    <header class="bg-gradient-to-r from-purple-600 to-blue-600 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
          <a href="/">Work Hunt</a>
        </h1>
        <nav class="space-x-4">
          <?php if(Session::has('user')) : ?>
            <div class="flex justify-between items-center gap-4">
              <div>
                Welcome <?= Session::get('user')['name'] ?>
              </div>
              <form method="POST" action="/auth/logout">
                <button type="submit" class="text-white inline hover:underline">Logout</button>
              </form>
              <?php if(!Authorization::isJobSeeker()) : ?>
              <a
                href="/users/employer/dashboard"
                class="hover:underline py-2 font-bold text-yellow-500"
              >
              <i class="fa fa-gauge mr-1"></i> Dashboard
              </a>
              <a
                href="/listings/create"
                class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
                ><i class="fa fa-edit"></i> Post a Job</a>
              <?php else : ?>
                <a
                href="/users/jobseeker/dashboard"
                class="hover:underline py-2 font-bold text-yellow-500"
                > Profile</a>
              <?php endif; ?>
            </div>

          <?php else : ?>

            <a href="/auth/login" class="text-white hover:underline">Login</a>
            <a href="/auth/register" class="text-white hover:underline">Register</a>
          
          <?php endif; ?>

        </nav>
      </div>
    </header>
