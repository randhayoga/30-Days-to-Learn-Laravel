<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="https://github.com/twitter/twemoji/blob/gh-pages/2/svg/1f602.svg" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi {{ $job->employer->user->first_name }} {{ $job->employer->user->last_name}}</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            We're glad that you listed your job in our platform.
            You can check the listing below.
        </p>

        <a href="{{ url('/jobs/' . $job->id) }}" class="px-6 py-2 mt-8 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Check my job listing
        </a>

        <p class="mt-2 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            LGTM team
        </p>
    </main>
</section>