<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class InterFaceController extends \App\Http\Controllers\Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('product');
    }

    public function register()
    {
        return view('account_pages.register');
    }

    public function login()
    {
        return view('account_pages.login');
    }

    public function forgetPassword()
    {
        return view('account_pages.forget_password');
    }

    public function registerVN()
    {
        return view('account_pages.register_vn');
    }

    public function loginVN()
    {
        return view('account_pages.login_vn');
    }

    public function forgetPasswordVN()
    {
        return view('account_pages.forget_password_vn');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogTrue()
    {
        return view('pages.content1');
    }

    public function blogEquity()
    {
        return view('pages.content2');
    }

    public function blogLean()
    {
        return view('pages.content3');
    }

    public function termsUse()
    {
        return view('footer_pages.terms_of_service');
    }

    public function privacyPolicy()
    {
        return view('footer_pages.policy_warning');
    }
    public function examTest()
    {
        return view('footer_pages.exam_test');
    }
    public function evaluate()
    {
        return view('footer_pages.evaluate');
    }
    public function trainEmployee()
    {
        return view('footer_pages.train_employee');
    }
    public function paginate($data, $viewName, $variableName = 'articles')
    {
        $paginate = collect($data);
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $paginate->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginated = new LengthAwarePaginator($currentPageItems, $paginate->count(), $perPage);
        $paginated->setPath(request()->url());

        return view($viewName, [$variableName => $paginated]);
    }

    public function document()
    {
        $articles = [];
        for ($i = 1; $i <= 10; $i++) {
            $articles[] = [
                'title' => 'Reference check là gì? 4 điểm cần lưu ý khi kiểm tra tham chiếu 6 ',
                'url' => '/blog/micromanagement-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-324x235.jpg',
                'excerpt' => 'Reference check là khâu vô cùng quan trọng trong quá trình tuyển dụng...',
            ];
        }

        // Gọi phương thức chung
        return $this->paginate($articles, 'components_blog.document', 'articles');
    }

    public function exam()
    {
        $exams = [];
        for ($i = 1; $i <= 10; $i++) {
            $exams[] = [
                'title' => 'IQ và EQ cái nào quan trọng hơn? Chọn yếu tố gì trong tuyển... ',
                'url' => '/blog/lean-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/05/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg',
                'excerpt' => 'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển dụng nhân sự. Tuy vậy, rất nhiều nhà tuyển dụng vẫn phân vân không biết IQ và EQ cái...',
            ];
        }

        return $this->paginate($exams, 'components_blog.exam', 'exams');
    }

    public function news()
    {
        $news = [];
        for ($i = 1; $i <= 10; $i++) {
            $news[] = [
                'title' => 'Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg',
                'excerpt' => 'Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý...',
            ];
        }

        return $this->paginate($news, 'components_blog.news', 'news');
    }

    public function peoples()
    {
        $peoples = [];
        for ($i = 1; $i <= 10; $i++) {
            $peoples[] = [
                'title' => 'Cách sa thải nhân viên khéo léo | Những điều cần biết và lưu... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/12/cach-sa-thai-nhan-vien-kheo-leo-testcenter-324x235.jpg',
                'excerpt' => 'Cách sa thải nhân viên khéo léo được xem như một trong những kỹ năng quan trọng hàng đầu mà bất cứ nhà quản lý doanh nghiệp nào cũng cần nắm rõ...',
            ];
        }

        return $this->paginate($peoples, 'components_blog.people', 'peoples');
    }
    public function allPage(Request $request)
    {
        // Mảng dữ liệu đã có
        $people = [];
        for ($i = 1; $i <= 10; $i++) {
            $people[] = [
                'title' => 'Cách sa thải nhân viên khéo léo | Những điều cần biết và lưu... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/12/cach-sa-thai-nhan-vien-kheo-leo-testcenter-324x235.jpg',
                'excerpt' => 'Cách sa thải nhân viên khéo léo được xem như một trong những kỹ năng quan trọng hàng đầu mà bất cứ nhà quản lý doanh nghiệp nào cũng cần nắm rõ...',
            ];
        }

        $new = [];
        for ($i = 1; $i <= 10; $i++) {
            $new[] = [
                'title' => 'Equity Theory là gì? Cách quản trị doanh nghiệp hiệu quả với học thuyết... ',
                'url' => '/blog/equity-theory-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2024/02/equity-theory-la-gi-testcenter-1-324x235.jpg',
                'excerpt' => 'Quản trị doanh nghiệp chưa bao giờ là một nhiệm vụ dễ dàng đối với các nhà quản lý...',
            ];
        }

        $exams = [];
        for ($i = 1; $i <= 10; $i++) {
            $exams[] = [
                'title' => 'IQ và EQ cái nào quan trọng hơn? Chọn yếu tố gì trong tuyển... ',
                'url' => '/blog/lean-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/05/iq-va-eq-cai-nao-quan-trong-hon-testcenter-324x235.jpg',
                'excerpt' => 'IQ và EQ đã trở thành hai khái niệm quan trọng trong lĩnh vực tuyển dụng nhân sự...',
            ];
        }

        $articles = [];
        for ($i = 1; $i <= 10; $i++) {
            $articles[] = [
                'title' => 'Reference check là gì? 4 điểm cần lưu ý khi kiểm tra tham chiếu 6 ',
                'url' => '/blog/micromanagement-la-gi/',
                'image_url' => 'https://www.testcenter.vn/blog/wp-content/uploads/2023/06/reference-check-la-gi-testcenter-324x235.jpg',
                'excerpt' => 'Reference check là khâu vô cùng quan trọng trong quá trình tuyển dụng...',
            ];
        }
        $allPage = array_merge($people, $new, $exams, $articles);
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            // Lọc dữ liệu theo title
            $allPage = array_filter($allPage, function ($item) use ($searchTerm) {
                return stripos($item['title'], $searchTerm) !== false;
            });
        }
        return $this->paginate($allPage, 'components_blog.allPage', 'paginatedData');
    }

}
