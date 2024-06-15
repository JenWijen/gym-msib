Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('staff/dashboard', [StaffController::class, 'index'])->name('staff.master');

    // Members routes for staff
    Route::prefix('staff/members')->name('staff_members.')->group(function () {
        Route::get('/', [MembersController::class, 'staffIndex'])->name('index');
        Route::get('create', [MembersController::class, 'staffCreate'])->name('create');
        Route::post('/', [MembersController::class, 'staffStore'])->name('store');
        Route::get('{staff_members}', [MembersController::class, 'staffShow'])->name('show');
        Route::get('{staff_members}/edit', [MembersController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_members}', [MembersController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_members}', [MembersController::class, 'staffDestroy'])->name('destroy');
    });

    // Memberships routes for staff
    Route::prefix('staff/memberships')->name('staff_memberships.')->group(function () {
        Route::get('/', [MembershipController::class, 'staffIndex'])->name('index');
        Route::get('create', [MembershipController::class, 'staffCreate'])->name('create');
        Route::post('/', [MembershipController::class, 'staffStore'])->name('store');
        Route::get('{staff_memberships}/show', [MembershipController::class, 'staffShow'])->name('show');
        Route::get('{staff_memberships}/edit', [MembershipController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_memberships}', [MembershipController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_memberships}', [MembershipController::class, 'staffDestroy'])->name('destroy');
    });

    // Non-TrainerMemberships routes
    Route::prefix('staff/non_membership')->name('staff_non_membership.')->group(function () {
        Route::get('/', [NTMembershipController::class, 'staffIndex'])->name('index');
        Route::get('create', [NTMembershipController::class, 'staffCreate'])->name('create');
        Route::post('/', [NTMembershipController::class, 'staffStore'])->name('store');
        Route::get('{staff_non_membership}/show', [NTMembershipController::class, 'staffShow'])->name('show');
        Route::get('{staff_non_membership}/edit', [NTMembershipController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_non_membership}', [NTMembershipController::class, 'staffUpdate'])->name('update');
    });

    // Rent routes for staff
    Route::prefix('staff/rent_book')->name('staff_rent_book.')->group(function () {
        Route::get('/', [RentController::class, 'staffIndex'])->name('index');
        Route::get('create', [RentController::class, 'staffCreate'])->name('create');
        Route::post('/', [RentController::class, 'staffStore'])->name('store');
        Route::get('{staff_rent_book}/show', [RentController::class, 'staffShow'])->name('show');
        Route::get('{staff_rent_book}/edit', [RentController::class, 'staffEdit'])->name('edit');
        Route::put('{staff_rent_book}', [RentController::class, 'staffUpdate'])->name('update');
        Route::delete('{staff_rent_book}', [RentController::class, 'staffDestroy'])->name('destroy');
    });
});