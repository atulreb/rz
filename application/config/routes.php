<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	http://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
/*
 * Routes for fronend static pages
 */


$route['default_controller'] = 'frontend/Pages/home';
$route['contact-us'] = 'frontend/Pages/contactUs';
$route['about-us'] = 'frontend/Pages/aboutUs';
$route['testimonials'] = 'frontend/Pages/testimonials';
$route['submitTestimonial'] = 'backend/Testimonial/submitTestimonial';
$route['testimonials-detail/(:any)'] = 'frontend/Pages/testimonialsDetail/$1';
$route['brand-services'] = 'frontend/Pages/brandServices';
$route['terms-and-conditions'] = 'frontend/Pages/termsAndConditions';
$route['privacy-policy'] = 'frontend/Pages/privacyPolicy';
$route['faq'] = 'frontend/Pages/faq';
$route['calendar'] = 'frontend/Pages/calendar';
$route['event/(:any)'] = 'frontend/pages/eventDetail/$1';
$route['partner'] = 'frontend/Pages/partnerWithUs';
$route['partner/(:any)'] = 'frontend/Pages/partnerWithUs/$1';

$route['building-services'] = 'frontend/landing_pages/buildingServices';
$route['housekeepers'] = 'frontend/landing_pages/houseKeepers';
$route['razor-foundation'] = 'frontend/landing_pages/razorFoundation';
//$route['towing'] = 'frontend/landing_pages/towing';
//$route['pool-cleaning'] = 'frontend/landing_pages/poolCleaning';
$route['mobile-detail'] = 'frontend/landing_pages/mobileDetail';
$route['lawn-care'] = 'frontend/landing_pages/lawnCare';
//$route['security'] = 'frontend/landing_pages/security';
$route['handyman'] = 'frontend/landing_pages/handyman';
$route['painters'] = 'frontend/landing_pages/painters';
$route['pest-control'] = 'frontend/landing_pages/pestControl';
$route['foundation'] = 'frontend/landing_pages/foundation';


/*
 * Routes for landing pages
 */
$route['towing'] = 'landing-pages/Towing/index';
$route['towing/towing'] = 'landing-pages/Towing/towing';
$route['towing/heavy-equipment'] = 'landing-pages/Towing/heavyEquipment';
$route['towing/roadside-asistance'] = 'landing-pages/Towing/roadsideAssistant';
$route['towing/junk-cars'] = 'landing-pages/Towing/junkCars';
$route['towing/contact'] = 'landing-pages/Towing/contact';
$route['towing/blog'] = 'landing-pages/Towing/blog';
$route['towing/blog-details/(:any)'] = 'landing-pages/Towing/blogDetails/$1';
$route['towing/blog/(:any)'] = 'landing-pages/Towing/blog/$1';
$route['transport'] = 'landing-pages/Transport/index';
$route['transport/customer-review'] = 'landing-pages/Transport/review';
$route['submitCustomerReviewOnTransport'] = 'landing-pages/Transport/submitReview';
$route['submitContactOnTransport'] = 'landing-pages/Transport/submitContact';
$route['submitQuoteOnTransport'] = 'landing-pages/Transport/submitQuote';
$route['transport/need-a-quote'] = 'landing-pages/Transport/needQuote';
$route['transport/contact-us'] = 'landing-pages/Transport/contactUs';
//$route['foundation'] = 'landing-pages/Foundation/index';
//$route['painters'] = 'landing-pages/Painters/index';
$route['pest-control'] = 'landing-pages/Pest_Control/index';
$route['pool-cleaning'] = 'landing-pages/Pool_Clenaing/index';
$route['pool-cleaning/about-us'] = 'landing-pages/Pool_Clenaing/aboutUs';
$route['pool-cleaning/services'] = 'landing-pages/Pool_Clenaing/services';
$route['pool-cleaning/blog'] = 'landing-pages/Pool_Clenaing/blog';
$route['pool-cleaning/blog/(:any)'] = 'landing-pages/Pool_Clenaing/blog/$1';
$route['pool-cleaning/blog-details/(:any)'] = 'landing-pages/Pool_Clenaing/blogDetails/$1';
$route['pool-cleaning/contact'] = 'landing-pages/Pool_Clenaing/contact';

$route['security'] = 'landing-pages/Security/index';
$route['security/aboutus'] = 'landing-pages/Security/aboutUs';
$route['security/security'] = 'landing-pages/Security/security';
$route['security/investigations'] = 'landing-pages/Security/investigations/$1';
$route['security/eventpermits'] = 'landing-pages/Security/eventpermits';
$route['security/mediacenter'] = 'landing-pages/Security/mediacenter';
$route['security/mediacenter/details/(:any)'] = 'landing-pages/Security/blogDetails/$1';
$route['security/mediacenter/(:any)'] = 'landing-pages/Security/mediacenter';
$route['security/contact'] = 'landing-pages/Security/contact';
$route['security/cybersecurity'] = 'landing-pages/Security/cybersecurity';
$route['security/privacy'] = 'landing-pages/Security/privacy';
$route['security/otherareaexpertise'] = 'landing-pages/Security/otherareaexpertise';

$route['mobile-detail'] = 'landing-pages/Mobile_detail/index';
$route['mobile-detail/aboutus'] = 'landing-pages/Mobile_detail/aboutUs';
$route['mobile-detail/interior-auto-detailing-service'] = 'landing-pages/Mobile_detail/interiorAutoDetailingService';
$route['mobile-detail/freshenup-auto-detailing-service'] = 'landing-pages/Mobile_detail/freshenUpAutoDetailingService';
$route['mobile-detail/ultimate-auto-detailing-service'] = 'landing-pages/Mobile_detail/ultimateAutoDetailingService';
$route['mobile-detail/full-auto-detailing-service'] = 'landing-pages/Mobile_detail/fullAutoDetailingService';
$route['mobile-detail/exterior-auto-detailing-service'] = 'landing-pages/Mobile_detail/exteriorAutoDetailingService';
$route['mobile-detail/testimonials'] = 'landing-pages/Mobile_detail/testimonials';
$route['mobile-detail/contact'] = 'landing-pages/Mobile_detail/contact';
$route['mobile-detail/special-offer'] = 'landing-pages/Mobile_detail/specialOffer';

$route['lawncare'] = 'landing-pages/lawncare/index';
$route['lawncare/testimonials'] = 'landing-pages/lawncare/testimonials';
$route['lawncare/services'] = 'landing-pages/lawncare/services';
$route['lawncare/aboutus'] = 'landing-pages/lawncare/aboutus';
$route['lawncare/careers'] = 'landing-pages/lawncare/careers';
$route['lawncare/contactus'] = 'landing-pages/lawncare/contactus';
$route['lawncare/blog'] = 'landing-pages/lawncare/blog';
$route['lawncare/blog-details/(:any)'] = 'landing-pages/lawncare/blogDetails/$1';
$route['lawncare/blog/(:any)'] = 'landing-pages/lawncare/blog/$1';
$route['lawncare/belgium-block-edging-curbing'] = 'landing-pages/lawncare/belgiumBlock';
$route['lawncare/landscape-curbing-edging'] = 'landing-pages/lawncare/landscapeEdging';
$route['lawncare/aeration-and-seeding'] = 'landing-pages/lawncare/aerationAndSeeding';
$route['lawncare/programs'] = 'landing-pages/lawncare/programs';
$route['lawncare/sprinkler-repair'] = 'landing-pages/lawncare/sprinklerRepair';
$route['lawncare/our-work'] = 'landing-pages/lawncare/ourWork';
$route['lawncare/weather-services'] = 'landing-pages/lawncare/weatherServices';


$route['handyman'] = 'landing-pages/handyman/index';
$route['handyman/aboutus'] = 'landing-pages/handyman/aboutus';
$route['handyman/services'] = 'landing-pages/handyman/services';
$route['handyman/reviews'] = 'landing-pages/handyman/testimonials';
$route['handyman/handyman-tips'] = 'landing-pages/handyman/handymanTips';
$route['handyman/contactus'] = 'landing-pages/handyman/contactus';
$route['handyman/gallary'] = 'landing-pages/handyman/gallary';

$route['staffing'] = 'landing-pages/staffing/index';
$route['staffing/aboutus'] = 'landing-pages/staffing/aboutUs';
$route['staffing/team'] = 'landing-pages/staffing/MeetTeam';
$route['staffing/contact'] = 'landing-pages/staffing/contact';
$route['staffing/jobseeker'] = 'landing-pages/staffing/jobSeeker';
$route['staffing/opportunities'] = 'landing-pages/staffing/opportunities';
$route['staffing/employers'] = 'landing-pages/staffing/employers';
$route['staffing/workforce-solutions'] = 'landing-pages/staffing/workForceSolutions';
$route['staffing/workforce-tools'] = 'landing-pages/staffing/workForceTools';
$route['staffing/recruitment-process'] = 'landing-pages/staffing/recruitmentProcess';
$route['staffing/privacy-policy'] = 'landing-pages/staffing/privacyPolicy';
$route['staffing/blog'] = 'landing-pages/staffing/blog';
$route['staffing/blog-details/(:any)'] = 'landing-pages/staffing/blogDetails/$1';
$route['staffing/blog/(:any)'] = 'landing-pages/staffing/blog/$1';
$route['staffing/job-details/(:any)'] = 'landing-pages/staffing/jobDetails/$1';


$route['pest-control'] = 'landing-pages/Pest_Control/index';
$route['pest-control/aboutus'] = 'landing-pages/Pest_Control/aboutus';
$route['pest-control/contactus'] = 'landing-pages/Pest_Control/contactus';
$route['pest-control/warrenty'] = 'landing-pages/Pest_Control/warrenty';
$route['pest-control/protection-plans'] = 'landing-pages/Pest_Control/protectionPlan';
$route['pest-control/commercial-plan'] = 'landing-pages/Pest_Control/commercialPlan';
$route['pest-control/residential-protection-plan'] = 'landing-pages/Pest_Control/residentialPlan';
$route['pest-control/termite-protection'] = 'landing-pages/Pest_Control/termiteProtection';
$route['pest-control/service-areas'] = 'landing-pages/Pest_Control/serviceAreas';
$route['pest-control/service-information'] = 'landing-pages/Pest_Control/serviceInformation';
$route['pest-control/services'] = 'landing-pages/Pest_Control/services';
$route['pest-control/ant-control'] = 'landing-pages/Pest_Control/antControl';
$route['pest-control/bed-bug-control'] = 'landing-pages/Pest_Control/bedBugControl';
$route['pest-control/commercial-pest-control-services'] = 'landing-pages/Pest_Control/commercialControl';
$route['pest-control/fire-ant-service'] = 'landing-pages/Pest_Control/fireAnt';
$route['pest-control/flea-and-tick-service'] = 'landing-pages/Pest_Control/fleaAndTick';
$route['pest-control/general-pest-service'] = 'landing-pages/Pest_Control/generalPest';
$route['pest-control/mosquito-service'] = 'landing-pages/Pest_Control/mosquito';
$route['pest-control/pest-control-management'] = 'landing-pages/Pest_Control/pestControlManagement';
$route['pest-control/pre-construction-services'] = 'landing-pages/Pest_Control/preConstruction';
$route['pest-control/residential-services'] = 'landing-pages/Pest_Control/residential';
$route['pest-control/roach-treatment'] = 'landing-pages/Pest_Control/roachTreatment';
$route['pest-control/rodent-control'] = 'landing-pages/Pest_Control/rodentControl';
$route['pest-control/spider-control'] = 'landing-pages/Pest_Control/spiderControl';
$route['pest-control/standard-control-services'] = 'landing-pages/Pest_Control/standardControl';
$route['pest-control/termite-inspections-control'] = 'landing-pages/Pest_Control/termiteInspetionsControl';
$route['pest-control/wildlife-services'] = 'landing-pages/Pest_Control/wildLife';
$route['pest-control/get-free-estimate'] = 'landing-pages/Pest_Control/getFreeEstimate';

$route['razorclean/stickyfooter'] = 'landing-pages/sticky_footer/index';

$route['painters'] = 'landing-pages/Painters/index';
$route['painters/services'] = 'landing-pages/Painters/residentialPenting';
$route['painters/commercial-painting-services'] = 'landing-pages/Painters/commercialPenting';
$route['painters/why-choose-us'] = 'landing-pages/Painters/whyChooseUs';
$route['painters/what-to-expect'] = 'landing-pages/Painters/wantToExpect';
$route['painters/plan-your-paint-job'] = 'landing-pages/Painters/planYourPaintJob';
$route['painters/interior-painting-process'] = 'landing-pages/Painters/interiorPaintingProcess';
$route['painters/exterior-painting-process'] = 'landing-pages/Painters/exteriorPaintingProcess';
$route['painters/color-consulting'] = 'landing-pages/Painters/colorConsulting';
$route['painters/total-home-painting-evaluation'] = 'landing-pages/Painters/totalHomePaintingEvaluation';
$route['painters/warranty'] = 'landing-pages/Painters/warranty';
$route['painters/residential-and-commercial'] = 'landing-pages/Painters/residentialCommercial';

$route['painters/about-us'] = 'landing-pages/Painters/aboutUs';
$route['painters/contact-us'] = 'landing-pages/Painters/contactUs';
$route['painters/reviews'] = 'landing-pages/Painters/reviews';
$route['painters/gallary'] = 'landing-pages/Painters/gallary';
$route['painters/blog'] = 'landing-pages/Painters/blog';
$route['painters/blog/(:any)'] = 'landing-pages/Painters/blog/$1';
$route['painters/blog-details/(:any)'] = 'landing-pages/Painters/blogDetails/$1';

$route['housekeepers'] = 'landing-pages/Housekeepers/index';
$route['housekeepers/about-us'] = 'landing-pages/Housekeepers/aboutUs';
$route['housekeepers/services'] = 'landing-pages/Housekeepers/services';
$route['housekeepers/faq'] = 'landing-pages/Housekeepers/faq';
$route['housekeepers/blog'] = 'landing-pages/Housekeepers/blog';
$route['housekeepers/blog-details/(:any)'] = 'landing-pages/Housekeepers/blogDetails/$1';
$route['housekeepers/blog/(:any)'] = 'landing-pages/Housekeepers/blog/$1';
$route['housekeepers/contact'] = 'landing-pages/Housekeepers/contact';

$route['building-services'] = 'landing-pages/building_services/index';
$route['building-services/services'] = 'landing-pages/building_services/services';
$route['building-services/janitorial-services'] = 'landing-pages/building_services/janitorialServices';
$route['building-services/floor-maintainance-services'] = 'landing-pages/building_services/floorMaintainanceServices';
$route['building-services/deep-clean-services'] = 'landing-pages/building_services/deepCleanServices';
$route['building-services/terminal-cleaning-services'] = 'landing-pages/building_services/terminalCleaningServices';
$route['building-services/additional-services'] = 'landing-pages/building_services/additionalServices';
$route['building-services/hvac-cleaning'] = 'landing-pages/building_services/hvacCleaning';
$route['building-services/power-washing'] = 'landing-pages/building_services/powerWashing';
$route['building-services/restoration-service'] = 'landing-pages/building_services/restorationService';
$route['building-services/parking-lot-striping'] = 'landing-pages/building_services/parkingSlotStriping';
$route['building-services/office-cleaning-services'] = 'landing-pages/building_services/officeCleaningServices';
$route['building-services/contact-us'] = 'landing-pages/building_services/contactUs';
$route['building-services/about-us'] = 'landing-pages/building_services/aboutUs';
$route['building-services/careers'] = 'landing-pages/building_services/carrers';
$route['building-services/airport'] = 'landing-pages/building_services/airport';
$route['building-services/job-details/(:any)'] = 'landing-pages/building_services/jobDetails/$1';
$route['building-services/commercial-building'] = 'landing-pages/building_services/commercialBuilding';
$route['building-services/educational-building'] = 'landing-pages/building_services/educationaliBuilding';
$route['building-services/financial-building'] = 'landing-pages/building_services/financialBuilding';
$route['building-services/healthcare-building'] = 'landing-pages/building_services/healthcareBuilding';
$route['building-services/window-cleaning'] = 'landing-pages/building_services/windowCleaning';
$route['building-services/retail-building'] = 'landing-pages/building_services/retailBuilding';
$route['building-services/religious-building'] = 'landing-pages/building_services/religiousBuilding';
$route['building-services/industrial-building'] = 'landing-pages/building_services/industrialBuilding';
$route['building-services/escalator-cleaning'] = 'landing-pages/building_services/escalatorCleaning';
$route['building-services/concrete-polishing'] = 'landing-pages/building_services/concretePolishing';
$route['building-services/sportarea_cleaning'] = 'landing-pages/building_services/sportAreaCleaning';
$route['building-services/hospitality'] = 'landing-pages/building_services/hospitality';

$route['razor'] = 'landing-pages/razor/index';
$route['razor/media'] = 'landing-pages/razor/media';
$route['razor/blog'] = 'landing-pages/razor/blog';
$route['razor/management'] = 'landing-pages/razor/management';
$route['razor/supplies'] = 'landing-pages/razor/supplies';
$route['razor/contracting'] = 'landing-pages/razor/contracting';
$route['razor/blog-details/(:any)'] = 'landing-pages/razor/blogDetails/$1';
$route['razor/blog/(:any)'] = 'landing-pages/razor/blog/$1';


//$route['(:any)'] = 'frontend/Blog/getBlogDetails/$1';
$route['allblog'] = 'frontend/Blog/allBlogs';
$route['allblog/(:any)'] = 'frontend/Blog/allBlogs/$1';
$route['blog'] = 'frontend/Blog/viewBlogList';
$route['blog/(:any)'] = 'frontend/Blog/viewBlogList/$1';
$route['search_blog'] = 'frontend/Blog/searchBlog';
$route['search_blog/(:any)'] = 'frontend/Blog/searchBlog/$1';
$route['service/(:any)'] = 'frontend/Blog/serviceFilterBlogs/$1';
$route['blog/(:any)/(:any)'] = 'frontend/Blog/archiveBlogs/$1/$2';
$route['blog/(:any)/(:any)/(:any)'] = 'frontend/Blog/archiveBlogs/$1/$2/$3';
$route['addComment/(:any)'] = 'frontend/Blog/addComment/$1';

$route['checkout'] = 'frontend/cart/checkout';
$route['add_to_cart'] = 'frontend/cart/addToCart';
$route['add_to_cart_member'] = 'frontend/cart/addToCartMember';
$route['cart'] = 'frontend/cart/cart';
$route['remove_item_cart'] = 'frontend/cart/removeCartItem';
$route['update_cart'] = 'frontend/cart/updateCart';
$route['thank-you'] = 'frontend/cart/thankYou';


$route['login'] = 'frontend/login';
$route['signup'] = 'frontend/signup';
$route['logout'] = 'frontend/Login/logout';
$route['submitlogin'] = 'backend/login/adminlogin';
$route['admin/dashboard'] = 'backend/Dashboard/admin';
$route['employee/dashboard'] = 'frontend/Dashboard/employee';
$route['register/employee'] = 'frontend/Register/employee';
$route['employee/profile'] = 'backend/employee/profile';
$route['employee/payslip'] = 'backend/employee/employeePayslips';
$route['employee/upload-document'] = 'backend/employee/uploadEmployeeDocument';
$route['admin/employee-documents'] = 'backend/employee/employeeDocuments';
$route['admin/view-docs/(:any)'] = 'backend/employee/viewEmployeeAllDocuments/$1';

/*
 * Routes for manage training
 */
$route['admin/add-training-material'] = "backend/training/addTrainingMaterial";
$route['employee/training-material'] = "backend/training/TrainingMaterialListForEmployee";
$route['admin/add-payslip'] = "backend/employee/addPaySlip";
$route['admin/employee-list'] = "backend/employee/employeeList";
$route['admin/add-employee'] = "backend/employee/addEmployee";
$route['employee/dashboard'] = 'backend/employee/dashboard';
/*
 * Routes for manage orders
 */
$route['admin/orders-list'] = "backend/orders/index";
$route['admin/order-details/(:any)'] = "backend/orders/orderDetails/$1";


/*  Manage  Blog section Start */
//$route['admin/blog'] = "backend/Blog/manage_blog_posts";
$route['admin/blog'] = "backend/Blog/manage_blog_posts";
$route['admin/blog/add-post'] = "backend/blog/edit_post";
$route['admin/blog/edit-post/(:any)'] = "backend/blog/edit_post/$1";
$route['admin/blog/delete-post'] = "backend/blog/delete_post";
$route['admin/blog/view-comments/(:any)'] = "backend/blog/view_post_comments/$1";
$route['admin/blog/add-post-comment/(:any)'] = "backend/blog/add_post_comment/$1";
$route['admin/blog/edit-post-comment/(:any)/(:any)'] = "backend/blog/edit_post_comment/$1/$2";
$route['admin/blog/delete-post-comment'] = "backend/blog/delete_post_comment";
$route['admin/blog/change-status'] = "backend/blog/changeStatus";
$route['check-empty-blog'] = "backend/blog/check_empty_post";
$route['check-empty-cms'] = "backend/cms/check_empty_cms";
$route['admin/edit-blog-language/(:any)'] = "backend/blog/editBlogLanguage/$1";
$route['admin/collection/get-blog-language'] = "backend/blog/getBlogLanguage";
/*  Manage  Blog section End */


/*
 * Routes for manage orders
 */
$route['admin/orders-list'] = "backend/orders/index";
$route['admin/order-details/(:any)'] = "backend/orders/orderDetails/$1";
/**
 * Routes for category
 */
$route['admin/category-list'] = "backend/category/list1";
$route['admin/subcategory-list'] = "backend/category/subcat_list";
$route['admin/subcategory-add'] = "backend/category/sub_category";
$route['admin/subcategory-edit/(:any)'] = "backend/category/editSubCategory/$1";
$route['admin/category-add'] = "backend/category/index";
$route['admin/category-edit'] = "backend/category/editCategory";
$route['admin/category-edit/(:any)'] = "backend/category/editCategory/$1";


/* Manage COntact Us Start */
$route['admin/contact-us'] = "backend/contact_us/listContactUs";
$route['admin/contact-us/view/(:any)'] = "backend/contact_us/view/$1";
$route['admin/contact-us/reply/(:any)'] = "backend/contact_us/reply/$1";
/* Manage COntact Us End */

$route['admin/vendor-list'] = "backend/vendors/vendorsList";
$route['admin/service-request-list'] = "backend/Request_service/serviceRequestList";

/*
 * Product categories routes
 */

$route['admin/product-category-list'] = "backend/product_category/list1";
$route['admin/product-subcategory-list'] = "backend/product_category/subcat_list";
$route['admin/product-subcategory-add'] = "backend/product_category/sub_category";
$route['admin/product-subcategory-edit/(:any)'] = "backend/product_category/editSubCategory/$1";
$route['admin/product-category-add'] = "backend/product_category/index";
$route['admin/product-category-add/(:any)'] = "backend/product_category/index/$1";
$route['admin/product-category-edit'] = "backend/product_category/editCategory";
$route['admin/product-category-edit/(:any)'] = "backend/product_category/editCategory/$1";


/*
 * routes for finance role
 */
$route['finance/dashboard'] = 'backend/Dashboard/finance';
$route['finance/invoice-list'] = 'backend/Finance/invoices';
$route['finance/preview_invoice/(:any)'] = 'backend/Invoice/previewInvoice/$1';
$route['finance/pdfinvoice/(:any)'] = 'backend/Invoice/pdfInvoice/$1';
$route['finance/expense-list'] = 'backend/expense/expenseList';
$route['finance/add-expense'] = 'backend/expense/addExpense';
$route['finance/edit-expense/(:any)'] = 'backend/expense/editExpense/$1';
$route['finance/expense-report'] = 'backend/Report/expense';
$route['finance/income-report'] = 'backend/Report/income';
$route['finance/add-recurring-invoice'] = 'backend/Invoice/addRecurringInvoice';
$route['finance/recurring-invoices'] = 'backend/Invoice/recurringInvoices';
$route['finance/pay-invoice/(:any)'] = 'backend/Invoice/payInvoice/$1';
$route['finance/send-invoice-in-mail/(:any)'] = 'backend/Invoice/sendInvoiceInMail/$1';
$route['finance/payment-received'] = 'backend/Invoice/paymentReceived';
$route['finance/add-invoice'] = 'backend/Invoice/addRecurringInvoice';
$route['finance/donations'] = 'backend/Donate/adminDonationList';


/*
 * Routes for variants
 */
$route['admin/variant-list'] = "backend/variant/variantList";
$route['admin/add-variant'] = "backend/variant/addVariant";
$route['admin/edit-variant'] = "backend/variant/addVariant";
$route['admin/edit-variant/(:any)'] = "backend/variant/editVariant/$1";

/*
 * Routes for jobs
 */
$route['admin/jobs-list'] = "backend/Job/jobList";
$route['admin/add-job'] = "backend/Job/addJob";
$route['admin/edit-job'] = "backend/Job/editJob";
$route['admin/edit-job/(:any)'] = "backend/Job/editJob/$1";
$route['admin/job-applications'] = "backend/Job/jobApplications";

/*
 * Routes for testimonials
 */
$route['admin/testimonial-list'] = "backend/testimonial/testimonialList";
$route['admin/add-testimonial'] = "backend/testimonial/addTestimonial";
$route['admin/edit-variant'] = "backend/variant/addVariant";
$route['admin/edit-testimonial/(:any)'] = "backend/testimonial/addTestimonial/$1";

/*
 * Routes for testimonials
 */
$route['admin/event-list'] = "backend/event/eventList";
$route['admin/add-event'] = "backend/event/addEvent";
$route['admin/edit-event'] = "backend/variant/editevent";
$route['admin/edit-event/(:any)'] = "backend/event/addevent/$1";

/*
 * Routes for coupons
 */
$route['admin/coupon-list'] = "backend/coupon/couponList";
$route['admin/add-coupon'] = "backend/coupon/addCoupon";
$route['admin/edit-coupon'] = "backend/coupon/addCoupon";
$route['admin/edit-coupon/(:any)'] = "backend/coupon/editCoupon/$1";
$route['validateCoupon'] = "backend/coupon/validateCoupon";
/*
 * Routes for product backend
 */
$route['admin/product-list'] = 'backend/product/productList';
$route['admin/add-product'] = 'backend/product/addProduct';
/*
 * Routes for admin backend
 */
$route['admin/global-setting'] = 'backend/Global_setting/listGlobalSettings';
$route['admin/global-settings/edit/(:any)'] = "backend/global_setting/editGlobalSettings/$1";

/* * Manage email template Start */
$route['admin/email-template/list'] = "backend/email_template/index";
$route['admin/edit-email-template/(:any)'] = "backend/email_template/editEmailTemplate/$1";
/* * Manage email template End */





/*
 * Routes for products frontend
 */
$route['products/(:any)'] = 'frontend/Product/productDetails/$1';
$route['product-details'] = 'frontend/Product/productDetails';
$route['shop'] = 'frontend/Product/shop';
$route['product/category/(:any)/(:any)'] = 'frontend/Product/shopCategory/$1/$2';
$route['product/category/(:any)'] = 'frontend/Product/shopCategory/$1';

/*
 * Routes for User Register
 */
$route['user-signup'] = "frontend/Signup/userRegister";
$route['register/user'] = "frontend/Register/user";
$route['user/dashboard'] = 'backend/Dashboard/user';
$route['user/appoinments'] = 'backend/user/appoinment';
$route['user/services'] = 'backend/user/serviceList';
$route['user/appointmentlist'] = 'backend/user/userAppointmentAdmin';
$route['user/appoinment/accept/(:any)'] = 'backend/user/acceptAppointment/$1';
$route['user/appoinment/reschedule/(:any)'] = 'backend/user/rescheduleAppointment/$1';
$route['user/upgrade'] = 'backend/user/upgrade';
$route['user/preview-invoice/(:any)'] = 'backend/Invoice/previewInvoice/$1';
$route['user/view-receipt/(:any)'] = 'backend/Invoice/viewReceipt/$1';
/*
 * Routes for order backend
 */
$route['user/order-list'] = 'backend/orders/index';

/*
 * Routes for Invoice backend
 */
/*
 * Routes for Invoice backend
 */
$route['user/invoice-list'] = 'backend/invoice/index';
$route['user/donations'] = 'backend/donate/userDonationList';
$route['user/add-testimonial'] = 'backend/Testimonial/userSubmitTestimonial';
$route['user/testimonials'] = 'backend/Testimonial/userTestimonials';
$route['user/donation-receipt/(:any)'] = 'backend/donate/donationReceipt/$1';

/*
 * Routes for pdf file
 */
$route['user/view-invoice'] = 'backend/invoice/view_invoice';
$route['user/view-invoice/(:any)'] = 'backend/invoice/view_invoice/$1';

$route['getSubCategory'] = 'frontend/Product/getSubCategory';


$route['admin/login'] = 'backend/login/index';
$route['404'] = 'frontend/Pages/pageNotFound404';
$route['404_override'] = 'frontend/Pages/pageNotFound404';
$route['(:any)'] = 'frontend/Blog/getBlogDetails/$1';
