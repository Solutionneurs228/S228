<?php
// Chemin racine (à adapter si nécessaire)
$root = __DIR__;

// Définir tous les dossiers à créer
$folders = [
    'app/Http/Controllers/Admin',
    'app/Http/Middleware',
    'app/Models',
    'app/Services',
    'app/Policies',
    'database/migrations',
    'resources/views/courses',
    'resources/views/admin/courses',
    'resources/css',
    'resources/js',
    'routes'
];

// Créer les dossiers
foreach ($folders as $folder) {
    $path = $root . DIRECTORY_SEPARATOR . $folder;
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        echo "Dossier créé : $folder\n";
    }
}

// Définir tous les fichiers à créer (vides pour l'instant)
$files = [
    // Controllers
    'app/Http/Controllers/CourseController.php',
    'app/Http/Controllers/LearningController.php',
    'app/Http/Controllers/Admin/CourseAdminController.php',
    'app/Http/Controllers/Admin/EnrollmentController.php',

    // Middleware
    'app/Http/Middleware/CourseAccess.php',

    // Models
    'app/Models/Course.php',
    'app/Models/Module.php',
    'app/Models/Lesson.php',
    'app/Models/Enrollment.php',
    'app/Models/Progress.php',
    'app/Models/Quiz.php',
    'app/Models/QuizResult.php',

    // Services
    'app/Services/ProgressService.php',

    // Policies
    'app/Policies/CoursePolicy.php',

    // Migrations
    'database/migrations/create_courses_table.php',
    'database/migrations/create_modules_table.php',
    'database/migrations/create_lessons_table.php',
    'database/migrations/create_enrollments_table.php',
    'database/migrations/create_progress_table.php',

    // Views
    'resources/views/courses/index.blade.php',
    'resources/views/courses/show.blade.php',
    'resources/views/courses/learn.blade.php',
    'resources/views/admin/courses/index.blade.php',
    'resources/views/admin/courses/create.blade.php',
    'resources/views/admin/courses/edit.blade.php',

    // CSS / JS
    'resources/css/courses.css',
    'resources/js/courses.js',

    // Routes
    'routes/web.php',
];

// Créer les fichiers
foreach ($files as $file) {
    $path = $root . DIRECTORY_SEPARATOR . $file;
    if (!file_exists($path)) {
        file_put_contents($path, "<?php\n\n"); // crée un fichier PHP vide par défaut
        // Si c'est un fichier .blade.php, on met juste un commentaire
        if (preg_match('/\.blade\.php$/', $file)) {
            file_put_contents($path, "<!-- $file -->\n");
        }
        // Si c'est CSS ou JS vide
        if (preg_match('/\.css$/', $file) || preg_match('/\.js$/', $file)) {
            file_put_contents($path, "/* $file */\n");
        }
        echo "Fichier créé : $file\n";
    }
}

echo "Structure LMS créée avec succès !\n";