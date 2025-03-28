<?php
$pageTitle = "Contato - Cooperativa AFFE";
include 'header.php';
?>
        <section class="py-12 md:py-16">
            <div class="container mx-auto px-4 max-w-4xl">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Entre em Contato</h2>
                    <p class="text-gray-600">Preencha o formulário abaixo para enviar sua mensagem</p>
                </div>

                <?php 
                session_start();
                if (isset($_GET['status'])): 
                    $message = $_GET['status'] === 'success' 
                        ? 'Mensagem enviada com sucesso!' 
                        : ($_SESSION['form_error'] ?? 'Ocorreu um erro ao enviar sua mensagem.');
                    unset($_SESSION['form_error']);
                ?>
                    <div class="<?php echo $_GET['status'] === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700'; ?> p-4 rounded-lg mb-6">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                <form class="space-y-6" action="processa_contato.php" method="POST">
                    <div class="space-y-2">
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
                        <input type="text" id="nome" name="nome" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">E-mail:</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                    </div>

                    <div class="space-y-2">
                        <label for="assunto" class="block text-sm font-medium text-gray-700">Assunto:</label>
                        <input type="text" id="assunto" name="assunto" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500">
                    </div>

                    <div class="space-y-2">
                        <label for="mensagem" class="block text-sm font-medium text-gray-700">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" rows="5" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500"></textarea>
                    </div>

                    <button type="submit" 
                        class="w-full md:w-auto bg-green-600 text-white font-medium py-2 px-6 rounded-md hover:bg-green-700 transition duration-300">
                        Enviar Mensagem
                    </button>
                </form>
            </div>
        </section>
<?php
include 'footer.php';
?>