<?php
$pageTitle = "AFFE Reciclagem - Apresentação";
include 'header.php';
?>
    <div class="container mx-auto max-w-md bg-white shadow-lg min-h-screen">
        <!-- Header -->
        <header class="bg-green-600 text-white p-4 shadow-md">
            <h1 class="text-xl font-bold text-center">AFFE Reciclagem</h1>
        </header>
        
        <!-- Navigation -->
        <nav class="flex border-b">
            <div class="nav-item active p-4 flex-1 text-center" data-screen="login">Login</div>
            <div class="nav-item p-4 flex-1 text-center" data-screen="user">Usuário</div>
            <div class="nav-item p-4 flex-1 text-center" data-screen="collector">Catador</div>
        </nav>

        <!-- Screens -->
        <main class="p-4">
            <!-- Login Screen -->
            <div id="login" class="screen active-screen">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold mb-4">Bem-vindo</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-2 border rounded-lg">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Senha</label>
                            <input type="password" class="w-full px-4 py-2 border rounded-lg">
                        </div>
                        <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                            Entrar
                        </button>
                        <p class="text-center text-sm mt-4">
                            Não tem conta? <span class="text-green-600">Cadastre-se</span>
                        </p>
                        <ul class="text-center">
                            <li><a href="index.php" class="text-green-600 hover:underline">Voltar ao Início</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- User Dashboard -->
            <div id="user" class="screen">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold">Postar Material</h2>
                    <div class="bg-white p-4 rounded-lg shadow mt-2">
                        <select class="w-full p-2 border rounded mb-2">
                            <option>Selecione o material</option>
                            <option>Papel</option>
                            <option>Plástico</option>
                        </select>
                        <input type="number" placeholder="Peso estimado (kg)" class="w-full p-2 border rounded mb-2">
                        <div class="map-container rounded-lg mb-2">
                            [ÁREA DO MAPA]
                        </div>
                        <button class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                            Solicitar Coleta
                        </button>
                    </div>
                </div>

                <div>
                    <h2 class="text-xl font-semibold">Minhas Solicitações</h2>
                    <div class="bg-white p-4 rounded-lg shadow mt-2">
                        <div class="border-b py-2">
                            <p><strong>Plástico</strong> - 5kg</p>
                            <p class="text-sm text-gray-500">Status: Catador a caminho</p>
                        </div>
                        <div class="border-b py-2">
                            <p><strong>Papel</strong> - 3kg</p>
                            <p class="text-sm text-gray-500">Status: Coleta concluída</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Collector Dashboard -->
            <div id="collector" class="screen">
                <h2 class="text-xl font-semibold mb-2">Solicitações Disponíveis</h2>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="border-b py-2 flex justify-between items-center">
                        <div>
                            <p><strong>Plástico</strong> - 5kg</p>
                            <p class="text-sm">Distância: 1.2km</p>
                        </div>
                        <button class="bg-green-600 text-white px-3 py-1 rounded text-sm">
                            Aceitar
                        </button>
                    </div>
                    <div class="border-b py-2 flex justify-between items-center">
                        <div>
                            <p><strong>Vidro</strong> - 8kg</p>
                            <p class="text-sm">Distância: 2.5km</p>
                        </div>
                        <button class="bg-green-600 text-white px-3 py-1 rounded text-sm">
                            Aceitar
                        </button>
                    </div>
                </div>

                <h2 class="text-xl font-semibold mt-4 mb-2">Minhas Coletas</h2>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="border-b py-2">
                        <p><strong>Plástico</strong> - 5kg</p>
                        <p class="text-sm">Endereço: Rua Exemplo, 123</p>
                        <div class="flex justify-between mt-1">
                            <span class="text-sm text-gray-500">Em andamento</span>
                            <button class="text-green-600 text-sm">Ver rota</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Simple navigation between screens
        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function() {
                // Update active nav item
                document.querySelectorAll('.nav-item').forEach(nav => {
                    nav.classList.remove('active');
                });
                this.classList.add('active');
                
                // Show selected screen
                const screenId = this.getAttribute('data-screen');
                document.querySelectorAll('.screen').forEach(screen => {
                    screen.classList.remove('active-screen');
                });
                document.getElementById(screenId).classList.add('active-screen');
            });
        });
    </script>
<?php
include 'footer.php';
?>