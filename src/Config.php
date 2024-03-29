<?php
namespace ren1244\PDFWriter;

class Config
{
    //載入的 content module
    const Modules=[
        'image'=> Module\Image::class,
        'text' => Module\Text::class,
        'postscriptGragh'=> Module\PostscriptGragh::class,
        'textBox'=> Module\TextBox::class,
        'template' => Module\Template::class,
    ];

    //載入的 resource module
    const Resources=[
        'font' => Resource\FontController::class,
        'imageResource' => Resource\ImageResource::class,
        'formXObject' => Resource\FormXObject::class,
    ];

    //頁面尺寸名稱設定，注意這邊都是 pt
    const PAGE_SIZE=[
        'A0' => [2383.93701, 3370.3937],
        'A1' => [1683.77953, 2383.93701],
        'A2' => [1190.55118, 1683.77953],
        'A3' => [841.88976, 1190.55118],
        'A4' => [595.27559, 841.88976],
        'A5' => [419.52756, 595.27559],
        'A6' => [297.6378, 419.52756],
        'A7' => [209.76378, 297.6378],
        'A8' => [147.40157, 209.76378],
        'A9' => [104.88189, 147.40157],
        'A10' => [73.70079, 104.88189],
        'B0' => [2834.64567, 4008.18898],
        'B1' => [2004.09449, 2834.64567],
        'B2' => [1417.32283, 2004.09449],
        'B3' => [1000.62992, 1417.32283],
        'B4' => [708.66142, 1000.62992],
        'B5' => [498.89764, 708.66142],
        'B6' => [354.33071, 498.89764],
        'B7' => [249.44882, 354.33071],
        'B8' => [175.74803, 249.44882],
        'B9' => [124.72441, 175.74803],
        'B10' => [87.87402, 124.72441],
        'C0' => [2599.37008, 3676.53543],
        'C1' => [1836.85039, 2599.37008],
        'C2' => [1298.26772, 1836.85039],
        'C3' => [918.4252, 1298.26772],
        'C4' => [649.13386, 918.4252],
        'C5' => [459.2126, 649.13386],
        'C6' => [323.14961, 459.2126],
        'C7' => [229.6063, 323.14961],
        'C8' => [161.5748, 229.6063],
        'C9' => [113.38583, 161.5748],
        'C10' => [79.37008, 113.38583],
        'JIS-B0' => [2919.68504, 4127.24409],
        'JIS-B1' => [2063.62205, 2919.68504],
        'JIS-B2' => [1459.84252, 2063.62205],
        'JIS-B3' => [1031.81102, 1459.84252],
        'JIS-B4' => [728.50394, 1031.81102],
        'JIS-B5' => [515.90551, 728.50394],
        'JIS-B6' => [362.83465, 515.90551],
        'JIS-B7' => [257.95276, 362.83465],
        'JIS-B8' => [181.41732, 257.95276],
        'JIS-B9' => [127.55906, 181.41732],
        'JIS-B10' => [90.70866, 127.55906]
    ];

    //字型檔放置資料夾
    const FONT_DIR=__DIR__.'/../fonts';

    //用到 gzcompress 時，壓縮等級
    const GZIP_LEVEL=6;
}