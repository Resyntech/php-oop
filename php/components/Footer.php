<?php
    echo "<footer>
        <div class='ornament'>
            <p>Contact us:</p>
            <a href='#'>support@studentreview.admin.ph</a>
        </div>
        <p>© 2022 Student Review. All Rights Reserved.</p>
        <div class='ornament'>
            <a href='#'>Terms of Service</a>
            <p>|</p>
            <a href='#'>Privacy Policy</a>
        </div>
    </footer>";
?>
<link rel="stylesheet" href="./dist/ornament.css" />
<style>
    footer {
        position: absolute;
        z-index: 30;
        right: 0;
        left: 0;
        background-color: var(--black);
        border-top: 2px solid;
        border-color: var(--bordercolor);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: var(--gray);
        gap: var(--gapping);
        padding: var(--gapping);
    }
</style>