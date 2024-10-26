<?php

namespace App\Http\Controllers;

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
        return view('account_pages.registers.register');
    }

    public function login()
    {
        return view('account_pages.logins.login');
    }

    public function forgetPassword()
    {
        return view('account_pages.forget_passwords.forget_password');
    }

    public function registerVN()
    {
        return view('account_pages.registers.register_vn');
    }

    public function loginVN()
    {
        return view('account_pages.logins.login_vn');
    }

    public function forgetPasswordVN()
    {
        return view('account_pages.forget_passwords.forget_password_vn');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogMicromanagement()
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
    public function termsUse(){
        return view('footer_pages.terms_of_service');
    }
    public function paginateArticles($data, $viewName, $variableName = 'articles')
    {
        $collection = collect($data);
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $paginated = new LengthAwarePaginator($currentPageItems, $collection->count(), $perPage);
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
        return $this->paginateArticles($articles, 'components_blog.document','articles');
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

        return $this->paginateArticles($exams, 'components_blog.exam','exams');
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

        return $this->paginateArticles($news, 'components_blog.news','news');
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

        return $this->paginateArticles($peoples, 'components_blog.people','peoples');
    }
}
