<div class="dashboard fullHeight">
    <!-- Dashboard content -->
    <div class="dashboardContent">
        <div class="d-flex flex-column g-2 container">
            <div class="row g-4">
                <div class="col-12">
                    <!-- Include atuador component -->
                    <?php include '../atuador/atuador.php';?>
                    
                    <!-- Include sensor component -->
                    <?php include '../sensor/sensor.php';?>
                    
                    <!-- Include creators component -->
                    <?php include '../creators/creators.php';?>
                </div>
            </div>

            <!-- Include history component -->
            <?php include '../../history/history.php'; ?>
        </div>
    </div>
</div>