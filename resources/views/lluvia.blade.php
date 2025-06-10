<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lluvia de Letras – Tiroteo</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(120deg, #fdfcfb 0%, #e2d1c3 100%);
        }

        @keyframes growFade {
            0%   { transform: scale(0.3); opacity: 0; }
            20%  { opacity: 1; }
            60%  { transform: scale(3); opacity: 1; }
            85%  { transform: scale(3); opacity: 1; }
            100% { opacity: 0; transform: scale(3); }
        }

        .animate-grow {
            animation: growFade 7s ease-in-out forwards;
            white-space: nowrap;
        }
    </style>
</head>
<body class="m-0 p-0 h-screen w-screen overflow-hidden">

    <div id="rainContainer" class="absolute inset-0 pointer-events-none"></div>

    <a href="{{ route('love') }}"
       class="absolute top-4 left-4 z-10 text-white text-lg bg-gray-800/80 px-4 py-2 rounded hover:bg-gray-600/90">
        ⬅️ Volver
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
//             const phrases = [
//     "🎤 Cuando tú empiezas 🎤",
//     "💫 Ojalá nunca termine' 💫",
//     "💋 Porque siempre que me besas 💋",
//     "🌸 Florecen to' los jardines 🌸",

//     "🌅 Pero se fue el Sol 🌅",
//     "🌑 y nunca volvió 🌑",
//     "👦 Me sentí como un niño sin luz 👦",
//     "😨 con miedo 😨",

//     "📖 Este cuento de hadas 📖",
//     "🔚 al final, cambió 🔚",
//     "💔 Me llenó de promesas 💔",
//     "😢 que nunca cumplió 😢",
// ];

  const phrases = [
    "🎵 Y ahora quiero que vuelvas 🎵",
    "🎶 como un niño los finde' 🎶",
    "🎧 Desde que te has ido 🎧",
    "🎭 no hacen gracia los chiste' 🎭",
    "💇‍♂️ Me he cortado el pelo 💇‍♂️",
    "🎨 me he comprado otro tinte 🎨",
    "🔍 Buscando a ver si encuentro 🔍",
    "💔 alguna como tú en Tinder 💔",
    "🎼 Mi niña, eres la musa 🎼",
    "🎹 de mis canciones tristes 🎹",
    "🙈 No puedo cerrar los ojos 🙈",
    "🔥 mientras te me desvistes 🔥",
    "🌀 Haces que de mí se vayan 🌀",
    "😵 to' mis despiste' 😵",
    "🧠 Y es que olvidarte no 🧠",
    "🧩 será una tarea simple 🧩"
];


            const colors = [
                '#f87171', '#fbbf24', '#34d399', '#60a5fa',
                '#c084fc', '#f472b6', '#fb923c', '#4ade80'
            ];

            const container = document.getElementById('rainContainer');

            function pastel() {
                return colors[Math.floor(Math.random() * colors.length)];
            }

            let index = 0;
            function showNextLine() {
                if (index >= phrases.length) return;

                const div = document.createElement('div');
                div.textContent = phrases[index++];
                div.className = 'animate-grow absolute px-4 py-2 text-sm font-semibold shadow-lg';
                div.style.color = '#111';
                div.style.backgroundColor = '#fff';
                div.style.border = `2px solid ${pastel()}`;
                div.style.borderRadius = '9999px';
                div.style.left = `${Math.random() * 60 + 15}%`;
                div.style.top = `${Math.random() * 70 + 10}%`;
                div.style.transformOrigin = 'center center';
                container.appendChild(div);

                setTimeout(() => div.remove(), 9000);

                // setTimeout(showNextLine, 3450); // 1.3 segundos para introduccion
                setTimeout(showNextLine, 2050); // 1.3 segundos entre

            }

            showNextLine(); // inicia la animación
        });
    </script>
</body>
</html>
