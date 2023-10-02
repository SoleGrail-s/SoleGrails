<?php if (!empty($_SESSION["success_messages"])): ?>
    <div class="alert alert-success d-flex align-items-center mx-auto" role="alert">
        <i class="fa-solid fa-circle-check  px-3" style="color: #45be3c;"></i>
        <div class="roboto_font my-auto">
            <ul>
                <?php foreach ($_SESSION["success_messages"] as $message): ?>
                    <li>
                        <?php echo $message; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION["success_messages"]); ?>

<?php elseif (!empty($_SESSION["error_messages"])): ?>
    <div class="alert alert-warning d-flex align-items-center mx-auto" role="alert">
        <i class="fa-solid fa-triangle-exclamation  px-3" style="color: #ffd500;"></i>
        <div class="roboto_font my-auto">
            <ul>
                <?php foreach ($_SESSION["error_messages"] as $message): ?>
                    <li>
                        <?php echo $message; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php unset($_SESSION["error_messages"]); ?>
    <?php endif; ?>