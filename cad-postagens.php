<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Postagem - ADS System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <main class="main-content">
        <header style="margin-bottom: 30px;">
            <h1 style="color: #007bff;">Criar Nova Postagem</h1>
            <p style="color: #bbb;">Preencha os campos para publicar um novo conteúdo.</p>
        </header>

        <section class="card-form" style="background: #1e1e1e; padding: 20px; border-radius: 8px;">
            <form action="postagens.php" method="POST">
                <div class="form-group" style="margin-bottom: 15px;">
                    <label style="color: white; display: block; margin-bottom: 5px;">Título da Postagem</label>
                    <input type="text" name="titulo" placeholder="Ex: Tutorial de PHP" required style="width: 100%; padding: 10px; background: #333; border: 1px solid #444; color: white; border-radius: 4px;">
                </div>

                <div class="form-row" style="display: flex; gap: 20px; margin-bottom: 15px;">
                    <div class="form-group" style="flex: 1;">
                        <label style="color: white; display: block; margin-bottom: 5px;">Categoria</label>
                        <select name="categoria" style="width: 100%; padding: 10px; background: #333; border: 1px solid #444; color: white; border-radius: 4px;">
                            <option value="web">Desenvolvimento Web</option>
                            <option value="db">Banco de Dados</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                    <div class="form-group" style="flex: 1;">
                        <label style="color: white; display: block; margin-bottom: 5px;">Status</label>
                        <select name="status" style="width: 100%; padding: 10px; background: #333; border: 1px solid #444; color: white; border-radius: 4px;">
                            <option value="publicado">Publicar agora</option>
                            <option value="rascunho">Salvar como rascunho</option>
                        </select>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label style="color: white; display: block; margin-bottom: 5px;">Conteúdo</label>
                    <textarea name="conteudo" rows="10" style="width: 100%; padding: 10px; background: #333; border: 1px solid #444; color: white; border-radius: 4px; resize: vertical;"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn">
                        <i class="fa-solid fa-check"></i> Finalizar Postagem
                    </button>
                    <a href="postagens.php" style="margin-left: 15px; color: #bbb; text-decoration: none;">Cancelar</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>