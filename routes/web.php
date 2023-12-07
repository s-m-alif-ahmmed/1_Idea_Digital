<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\PolicyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfilePhotoController;
use App\Http\Controllers\Admin\CommonSection\TopMenu\IdeaLogoController;
use App\Http\Controllers\Admin\CommonSection\TopMenu\TopSocialController;
use App\Http\Controllers\Admin\CommonSection\Footer\CopyrightController;
use App\Http\Controllers\Admin\CommonSection\Footer\TermController;
use App\Http\Controllers\Admin\CommonSection\Footer\PrivacyController;
use App\Http\Controllers\Admin\CommonSection\Footer\FooterSocialController;
use App\Http\Controllers\Admin\ContactUsSection\ConatctMessage\HomeContact\HomeContactController;
use App\Http\Controllers\Admin\ContactUsSection\ConatctMessage\MainContact\MainContactController;
use App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\Service\ServiceController;
use App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanType\PlanTypeController;
use App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanDetail\PlanDetailController;
use App\Http\Controllers\Admin\ServiceSection\ServiceAndPlan\PlanAndPrice\PlanContent\PlanContentController;
use App\Http\Controllers\Admin\ServiceSection\Contents\ServiceDescriptionController;
use App\Http\Controllers\Admin\ServiceSection\Contents\PackageSubHeadingController;
use App\Http\Controllers\Admin\ServiceSection\Contents\PackageDescriptionController;
use App\Http\Controllers\Admin\BlogSection\TagController;
use App\Http\Controllers\Admin\BlogSection\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/case-studies', [WebsiteController::class, 'caseStudies'])->name('case.studies');
Route::get('/services', [WebsiteController::class, 'services'])->name('services');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/home/contact/save', [WebsiteController::class, 'homeContactStore'])->name('home.contact.store');
Route::post('/main/contact/save', [WebsiteController::class, 'mainContactStore'])->name('main.contact.store');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');

Route::get('/case-details', [WebsiteController::class, 'caseDetails'])->name('case.details');
Route::get('/blog/details/{id}', [WebsiteController::class, 'blogDetails'])->name('blog.details');
Route::get('/service-details/{id}', [WebsiteController::class, 'serviceDetails'])->name('service.details');


//Terms, Privacy and Return Polices

Route::get('/terms',[PolicyController::class,'terms'])->name('policy.terms');
Route::get('/policy',[PolicyController::class,'privacy'])->name('policy.privacy');

Route::middleware(['userBan'])->group(function () {

    Route::middleware(['auth', 'verified'])->group(function () {

        Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

        //    User Middleware

        Route::middleware(['user'])->group(function () {


        });

        //    Admin Middleware

        Route::middleware(['admin'])->group(function () {

            //   User

            Route::get('/users',[UserController::class,'users'])->name('users');
            Route::get('/users-detail/{id}',[UserController::class,'usersDetail'])->name('users-detail');
            Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');
            Route::get('/change-role/{id}',[UserController::class,'changeRole'])->name('change-role');
            Route::get('/change-ban-status/{id}',[UserController::class,'changeBanStatus'])->name('change-ban-status');

            // 1Idea Logo

            Route::resource('/ideaLogo',IdeaLogoController::class);

            // Top Social

            Route::resource('/topSocial',TopSocialController::class);
            Route::get('/change-top-social-status/{id}',[TopSocialController::class,'changeStatusTopSocial'])->name('status.top.social');

            // Copyright

            Route::resource('/copyright', CopyrightController::class);
            Route::get('/copyright/status/{id}',[CopyrightController::class,'changeStatusCopyright'])->name('status.copyright');

            // Terms & Conditions

            Route::resource('/term', TermController::class);
            Route::get('/term/status/{id}',[TermController::class,'changeStatusTerm'])->name('status.term');

            // Privacy Policy

            Route::resource('/privacy', PrivacyController::class);
            Route::get('/privacy/status/{id}',[PrivacyController::class,'changeStatusPrivacy'])->name('status.privacy');

            // Footer Social

            Route::resource('/footerSocial', FooterSocialController::class);
            Route::get('/footer/social/status/{id}',[FooterSocialController::class,'changeStatusFooterSocial'])->name('status.footer.social');

            // Home Contact

            Route::resource('/homeContact', HomeContactController::class);
            Route::get('/home/contact/status/{id}',[HomeContactController::class,'changeStatusHomeContact'])->name('status.home.contact');

            // Main Contact

            Route::resource('/mainContact', MainContactController::class);
            Route::get('/main/contact/status/{id}',[MainContactController::class,'changeStatusMainContact'])->name('status.main.contact');

            // Service

            Route::resource('/service', ServiceController::class);
            Route::get('/service/status/{id}',[ServiceController::class,'changeStatusService'])->name('status.service');

            // Plan Type

            Route::resource('/planType', PlanTypeController::class);
            Route::get('/planType/status/{id}',[PlanTypeController::class,'changeStatusPlanType'])->name('status.plan.type');

            // Plan Detail

            Route::resource('/planDetail', PlanDetailController::class);
            Route::get('/planDetail/status/{id}',[PlanDetailController::class,'changeStatusPlanDetail'])->name('status.plan.detail');
            Route::get('/planOnDetail/status/{id}',[PlanDetailController::class,'changeStatusPlanOnDetail'])->name('status.on.plan.detail');

            // Plan Content

            Route::resource('/planContent', PlanContentController::class);

            // Service Description Contents

            Route::resource('/serviceDescription', ServiceDescriptionController::class);

            // Package Sub Heading Contents

            Route::resource('/packageSubHeading', PackageSubHeadingController::class);
            Route::get('/packageSubHeading/status/{id}',[PackageSubHeadingController::class,'changeStatusPackageSubHeading'])->name('status.packageSubHeading');

            // Package Description Contents

            Route::resource('/packageDescription', PackageDescriptionController::class);
            Route::get('/packageDescription/status/{id}',[PackageDescriptionController::class,'changeStatusPackageDescription'])->name('status.packageDescription');

            // Tags

            Route::resource('/tag', TagController::class);
            Route::get('/tag/status/{id}',[TagController::class,'changeTagStatus'])->name('change.status.tag');

            // Blogs

            Route::resource('/blogs', BlogController::class);
            Route::get('/blogs/status/{id}',[BlogController::class,'changeBlogsStatus'])->name('change.status.blogs');

        });

    });


    Route::middleware('auth')->group(function () {

        //    Profile Show

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        //    Profile Photo manage

        Route::resource('/photo', ProfilePhotoController::class);
        Route::get('/photo/{id}', [ProfilePhotoController::class, 'show'])->name('profile.show');

    });

});

require __DIR__.'/auth.php';
