use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\IssueController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('issues', IssueController::class);
});
