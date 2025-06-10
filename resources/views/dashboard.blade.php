<x-app-layout>
    @push('styles')
    {{-- Font Awesome 6 (CDN)  --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
          referrerpolicy="no-referrer" />
@endpush

<x-slot name="header">
    <div class="space-y-4">
        <!-- Nombre y Rol -->
        <div>
            <h1 class="text-2xl font-extrabold text-gray-900">
                👋 Hola, soy <span class="text-blue-600">Joel Santos Gómez Alanoca</span>
            </h1>
            <p class="text-lg text-gray-700">
                Desarrollador&nbsp;Junior&nbsp;| QA&nbsp;Enthusiast&nbsp;| DevSecOps&nbsp;Learner
            </p>
        </div>

        <!-- Resumen -->
        <p class="text-gray-600 max-w-3xl">
            Apasionado por la calidad y la seguridad del software. Experiencia práctica en automatización
            de pruebas, desarrollo web MVC y buenas prácticas DevSecOps. Manejo desde herramientas básicas
            hasta intermedias, listo para aportar valor a proyectos dinámicos y seguir creciendo.
        </p>

        <!-- Tech stack -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Desarrollo -->
            <div class="rounded-lg border p-4 shadow-sm bg-white">
                <h2 class="font-semibold text-gray-800 mb-2">Desarrollo</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li><i class="fa-solid fa-layer-group mr-2 text-blue-600"></i>MVC</li>
                    <li><i class="fa-brands fa-css3-alt mr-2 text-sky-500"></i>Tailwind CSS</li>
                    <li><i class="fa-brands fa-php mr-2 text-indigo-700"></i>PHP / Laravel + Livewire</li>
                    <li><i class="fa-brands fa-python mr-2 text-yellow-500"></i>Python</li>
                    <li><i class="fa-brands fa-square-js mr-2 text-yellow-400"></i>JavaScript</li>
                    <li><i class="fa-brands fa-html5 mr-2 text-orange-600"></i>HTML 5</li>
                    <li><i class="fa-solid fa-database mr-2 text-emerald-600"></i>MySQL & SQL Server</li>
                    <li><i class="fa-solid fa-code mr-2 text-purple-700"></i>C#</li>
                </ul>
            </div>

            <!-- QA / Testing -->
            <div class="rounded-lg border p-4 shadow-sm bg-white">
                <h2 class="font-semibold text-gray-800 mb-2">QA &amp; Testing</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li><i class="fa-solid fa-vial mr-2 text-pink-600"></i>TestComplete</li>
                    <li><i class="fa-solid fa-database mr-2 text-emerald-600"></i>SQL Stress / Search SQLServer</li>
                    <li><i class="fa-brands fa-jenkins mr-2 text-red-600"></i>Jenkins CI</li>
                </ul>
            </div>

            <!-- Seguridad & DevOps -->
            <div class="rounded-lg border p-4 shadow-sm bg-white">
                <h2 class="font-semibold text-gray-800 mb-2">Seguridad &amp; DevOps</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li><i class="fa-solid fa-shield-halved mr-2 text-indigo-600"></i>SonarQube</li>
                    <li><i class="fa-brands fa-git-alt mr-2 text-orange-600"></i>Git / GitLab / GitHub</li>
                    <li><i class="fa-solid fa-bug mr-2 text-red-500"></i>Inyección SQL & OWASP básicos</li>
                    <li><i class="fa-solid fa-network-wired mr-2 text-cyan-600"></i>Wireshark</li>
                    <li><i class="fa-solid fa-server mr-2 text-gray-600"></i>Gestión de Endpoints</li>
                </ul>
            </div>
        </div>

        <!-- Proyectos destacados -->
        <div class="mt-4">
            <h2 class="font-semibold text-gray-800 mb-2">Proyectos Destacados</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li><strong>Sistema de incidencias</strong> – API REST en Laravel con pruebas E2E en TestComplete.</li>
                <li><strong>Pipeline QA</strong> – Métricas SonarQube + despliegue Jenkins + GitLab CI.</li>
                <li><strong>Dashboard de monitoreo</strong> – Livewire + MySQL con alertas en tiempo real.</li>
            </ul>
        </div>

        <!-- Contacto -->
        <div class="pt-2">
            <a href="mailto:joel.santos@example.com"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow">
                📧 Contáctame
            </a>
        </div>
    </div>
</x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    asdasd
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
