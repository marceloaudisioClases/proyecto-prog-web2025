use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;

Route::get('/frutas', [FrutaController::class, 'index'])->name('frutas.index');
Route::post('/frutas', [FrutaController::class, 'store'])->name('frutas.store');