<!DOCTYPE html>
<html>
<head>
    <title>Path Traversal Vulnarability - Simple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>
<body class="grid">
    <nav class="relative bg-gray-200 py-4 px-6 grid grid-cols-[auto_auto] justify-between items-center gap-x-4">
        <div class="text-4xl font-bold tracking-wide">
            <i class="text-blue-500 fa-solid fa-network-wired"></i>
            <span class="text-blue-500">Net</span>
            <span class="text-green-500">Sec</span>
            <i class="text-green-500 fa-solid fa-shield-halved"></i>
        </div>
        <div class="absolute flex justify-self-center items-center gap-x-5 tracking-wider text-lg font-medium">
            <a href="#">Home</a>
            <a href="#">Lessons</a>
            <a href="#">Labs</a>
            <a href="#">Examination</a>
            <a href="#">Contact</a>
        </div>
        <div>
            <input class="bg-white rounded-xl px-4 py-2 text-lg" placeholder="Search" />
        </div>
    </nav>
    <main class="justify-self-center max-w-[1400px] px-6 mt-20">
        <h1 class="text-4xl font-bold text-center">
            <i class="fa-solid fa-flask-vial"></i>
            <span>Labs</span>
        </h1>
        <div class="mt-10 grid grid-cols-[repeat(1,1fr)] sm:grid-cols-[repeat(2,1fr)] md:grid-cols-[repeat(3,1fr)] lg:grid-cols-[repeat(4,1fr)] gap-x-6 gap-y-4">
            <a href="#" class="px-4 py-2 text-right grid justify-items-end rounded-md border border-gray-300 hover:bg-gray-100 transition-colors">
                <img class="w-full" src="/images?filename=cisco-packet-tracer.png" alt="lab icon" />
                <p class="text-2xl mt-4 font-medium">exam_pactice.pka</p>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-user"></i>
                    <span>Admin</span>
                </div>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-calendar"></i>
                    <span>04/05/2025</span>
                </div>
                <p class="text-lg text-green-600 font-medium text-right">Easy</p>
            </a>
            <a href="#" class="px-4 py-2  text-right grid justify-items-end rounded-md border border-gray-300 hover:bg-gray-100 transition-colors">
                <img class="w-full" src="/images?filename=cisco-packet-tracer.png" alt="lab icon" />
                <p class="text-2xl mt-4 font-medium">exam_pactice.pka</p>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-user"></i>
                    <span>Admin</span>
                </div>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-calendar"></i>
                    <span>04/05/2025</span>
                </div>
                <p class="text-lg text-green-600 font-medium text-right">Easy</p>
            </a>
            <a href="#" class="px-4 py-2  text-right grid justify-items-end rounded-md border border-gray-300 hover:bg-gray-100 transition-colors">
                <img class="w-full" src="/images?filename=cisco-packet-tracer.png" alt="lab icon" />
                <p class="text-2xl mt-4 font-medium">exam_pactice.pka</p>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-user"></i>
                    <span>Admin</span>
                </div>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-calendar"></i>
                    <span>04/05/2025</span>
                </div>
                <p class="text-lg text-green-600 font-medium text-right">Easy</p>
            </a>
            <a href="#" class="px-4 py-2  text-right grid justify-items-end rounded-md border border-gray-300 hover:bg-gray-100 transition-colors">
                <img class="w-full" src="/images?filename=cisco-packet-tracer.png" alt="lab icon" />
                <p class="text-2xl mt-4 font-medium">exam_pactice.pka</p>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-user"></i>
                    <span>Admin</span>
                </div>
                <div class="text-lg font-medium mt-2 flex items-center gap-x-2">
                    <i class="fa-solid fa-calendar"></i>
                    <span>04/05/2025</span>
                </div>
                <p class="text-lg text-green-600 font-medium text-right">Easy</p>
            </a>
        </div> 
    </main>
</body>
</html>

