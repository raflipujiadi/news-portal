<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <script src="<?php echo e(URL::asset('js/app.js')); ?>"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    

    <!-- loader -->
    <link rel="stylesheet" href="<?php echo e(asset('css/loader.css')); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">
    <!--loader-->
    <div class="bg-loader">
        <div class="loader"></div>
        <div class="loading">Loading</div>
    </div>

    <section class="menu">

        <?php echo $__env->make('components.navnavbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </section>
    <div class="wrapper container">
        <div class="wrapper kolom">
            <section id="artikel">
                <h3>Gaji Gede! 10 Jurusan S2 yang Dianggap Paling Menguntungkan</h3>
                <h5>Kamis, 10 Juni 2021</h5>
                <img class="gambarartikel" alt="Ini Gambar"
                    src="https://akcdn.detik.net.id/visual/2020/10/05/infografis-resesi-kacau-harga-pangan-turun-uang-kuliah-malah-nge-gas_169.jpeg?w=715&q=90">
                </p>
                <p class="teks">
                    <strong>Yogyakarta, Jogja News</strong> - Microsoft subsidiary GitHub announced the new AI-powered
                    Copilot
                    service as a private beta for developers on June 29, 2021, with the “AI pair programmer” embedded in
                    Microsoft’s massively popular Visual Studio Code editor as an extension for beta users. As
                    developers
                    write
                    their code, Copilot will step in to make suggestions, much like the autocomplete feature in email
                    applications like Gmail, but for code written in Python, JavaScript, TypeScript, Ruby, Go, and other
                    programming languages.


                </p>
                <p class="teks">
                    Copilot was built in collaboration with OpenAI, the artificial intelligence lab founded by Elon
                    Musk,
                    Sam
                    Altman, and others and that Microsoft invested $1 billion in last year. OpenAI adapted its GPT-3
                    language-prediction model for computer code for this project in a model it calls Codex. Teaching
                    neural
                    networks to write code is not a new endeavor, with startups like TabNine and Kite working on similar
                    projects. But the heft of Microsoft and OpenAI means Copilot is a strong entrant to the market from
                    Day
                    1.Philip John Basile, senior front-end developer at cybersecurity company Dragos, has dabbled with
                    these
                    other
                    AI coding assistants, but told InfoWorld that Copilot is already “just on another level.”

                    The announcement certainly made a splash, generating 1,200 comments on Hacker News in just two days
                    and
                    driving hundreds of early users to show off its hits and misses on social media.
                    In terms of the developer experience today, a few early users—many of whom are GitHub Stars or
                    Microsoft
                    MVPs—have been showing off the capabilities on social media and in livestreams. Here’s what they
                    have to
                    say.
                </p>
                <p class="teks">
                    <strong>What works well in Copilot</strong>
                </p>
                <p class="teks">
                    Cassidy Williams, director of developer experience at PaaS company Netlify, said that Copilot “is
                    going
                    to
                    be incredibly useful for things like smaller utilities that I have to often rewrite across various
                    projects.
                    The fact that I could use it to do certain capitalization patterns, or write certain
                    pattern-matching
                    functions for me that I would normally have to either just hunker down and write or look up how to
                    do
                    for
                    the 100th time,” she told InfoWorld.

                    “Instead of autocomplete, it gives me ideas for full-fledged functions, random code items, and can
                    even
                    pull
                    together some written paragraphs for when I blog,” Dragos’s Basile said, based on his early
                    experiences
                    with
                    the tool.</p>
                </p>
            </section>
        </div>
    </div>
    <?php echo $__env->make('components.menubottom', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--FOOTER-->
    <?php echo $__env->make('components.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>

</html>
<?php /**PATH D:\Programming\php\Laravel\final project\news-portal\resources\views/artikel/t1.blade.php ENDPATH**/ ?>