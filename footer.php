<?php
/**
 * Footer unificado para o site AFFE
 */
?>        </main>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm md:text-base">&copy; <?php echo date('Y'); ?> Cooperativa AFFE. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileNav = document.getElementById('mobile-nav');
            mobileNav.classList.toggle('hidden');
        });
    </script>
</body>
</html>