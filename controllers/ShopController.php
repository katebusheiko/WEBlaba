<?php
require_once 'models/Product.php';

class ShopController {
    private $allProducts;

    public function __construct($data) {
        $this->allProducts = $data;
    }

    // Метод для получения отфильтрованных и отсортированных данных
    public function getProducts($search, $category, $sort) {
        $filtered = $this->allProducts;

        // Поиск
        if ($search) {
            $filtered = array_filter($filtered, function($p) use ($search) {
                return mb_stripos($p->name, $search) !== false;
            });
        }

        // Фильтр категории
        if ($category != 'Все') {
            $filtered = array_filter($filtered, function($p) use ($category) {
                return $p->category == $category;
            });
        }

        // Сортировка
        usort($filtered, function($a, $b) use ($sort) {
            if ($sort == 'price_asc') return $a->price <=> $b->price;
            if ($sort == 'price_desc') return $b->price <=> $a->price;
            return strcmp($a->name, $b->name);
        });

        return $filtered;
    }
}
?>