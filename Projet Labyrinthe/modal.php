<?php if (!$yolo): ?>
    <div class="modal" id="victoryModal">
        <div class="modal-content">
            <h2>Victoire !</h2>
            <p>Vous avez trouvé le chat !</p>
            <form method="POST">
                <div id="retry">
                    <button name="retry">
                        <p>Rejouer</p>
                    </button>
                </div>
            </form>
            <div><img src='./image/chat-girl.png' alt='girl' height=230px class="chat-girl"></div>
        </div>
    </div>
<?php endif; ?>