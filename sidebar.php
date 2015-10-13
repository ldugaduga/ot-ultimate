<aside id="sidebar">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
        <p>Please add sidebar widget on Wp Dashboard</p>
    <?php endif; ?>
</aside>