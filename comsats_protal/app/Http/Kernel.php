protected $routeMiddleware = [
    // Other middleware...
    'auth' => \App\Http\Middleware\EnsureAuthenticated::class,
    
];