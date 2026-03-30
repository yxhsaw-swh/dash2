<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria - ADS System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <main class="main-content">
        <section class="card-form">
            <div class="form-header">
                <h2><i class="fa-solid fa-tags"></i> Nova Categoria</h2>
                <p>Crie uma nova etiqueta para organizar suas postagens.</p>
            </div>

            <form action="categorias.php" method="POST">
                <div class="form-group">
                    <label for="nome_cat">Nome da Categoria</label>
                    <input type="text" id="nome_cat" name="nome_categoria" placeholder="Ex: Programação PHP" required>
                </div>

                <div class="form-group">
                    <label for="desc_cat">Descrição Curta</label>
                    <textarea id="desc_cat" name="desc_categoria" rows="4" placeholder="Sobre o que é esta categoria?" style="width: 100%; padding: 12px; background: #333; border: 1px solid #444; color: white; border-radius: 6px; resize: none;"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">
                        <i class="fa-solid fa-save"></i> Salvar Categoria
                    </button>
                    <a href="categorias.php" class="btn-cancel" style="margin-left: 15px; color: #bbb; text-decoration: none;">Cancelar</a>
                </div>
            </form>
        </section>
    </main>