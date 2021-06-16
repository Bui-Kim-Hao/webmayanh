<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tintucseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tintuc')->insert([
            [
               'maloaitin'=>1,
               'tentin'=>'Panasonic Phát Hành Bản Cập Nhật Firmware Cho Lumix GH5S, Lumix G100 Và G9',
               'hinhanh'=>'tin1.jpg',
               'noidung'=>'Sau một loạt những thông báo về máy ảnh mới, Panasonic cũng mang đến những nâng cấp cho dòng máy ảnh Lumix G hiện có.

               Panasonic với những cập nhật mới cho máy ảnh Lumix G
               Cập nhật firmware thường được sử dụng để sửa các lỗi khó chịu trên máy ảnh hoặc nâng cấp các tính năng để chúng hoạt động tốt hơn. Tuy nhiên, hầu hết các nhà sản xuất máy ảnh hiện nay đều có thiên hướng sử dụng các bản cập nhật firmware để bổ sung các tính năng mà máy ảnh chưa từng có trước đây và đưa chúng đến gần với những bản phát hành gần nhất.

               Đó cũng là những gì mà đợt cập nhật firmware mới nhất của Panasonic đã thực hiện, đặc biệt là đối với Lumix GH5S tập trung vào video đã ra mắt vào năm 2018 và có nguy cơ bị loại bỏ bởi Lumix GH5 II mới và Lumix GH6 sắp tới.

               Cũng với lần cập nhật này, Panasonic cũng update firmware cho Lumix G9 và Lumix G100. Tất cả các bản cập nhật này sẽ được phát hành từ ngày 9/6/2021.

               Panasonic Lumix GH5S có khả năng ghi ảnh RAW qua HDMI và nhiều hơn nữa
               Panasonic Lumix GH5S Firmware Version 2.0 sẽ bổ sung thêm khả năng ghi Apple ProRes RAW sang màn hình / đầu ghi bên ngoài như Atomos Ninja V. Bản cập nhật lần này có vẻ như được thiết lập để chạy đua với Lumix GH5 II mới. Điều này chắc chắn sẽ là làm tăng thêm phần hấp dẫn đối với những nhà làm phim hiện nay.
               Bản cập nhật firmware mới sẽ cho phép xuất video 12-bit C4K ProRes RAW ở tốc độ lên đến 60p, đồng thời sẽ nhận được một LUT chuyên dụng từ trang web của Panasonic để cung cấp khả năng phân loại màu tương tự như cấu hình V-Log / V-Gamut của Panasonic. Nó cũng cho phép máy ảnh ghi 4K Anamorphic 3.K ProRes RAW ở tỷ lệ 4: 3 với Nina V.

               Hệ thống lấy nét tự động của GH5S cũng sẽ được cập nhật tương tự như hiệu suất và công nghệ lấy nét của Lumix S5. Panasonic cũng hứa hẹn về khả năng nhận diện khuôn mặt và mắt nhanh hơn gấp 2 lần, đồng thời phát hiện người và động vật nhanh hơn tới 5 lần. Bên cạnh đó, hãng cũng sẽ cải thiện khả năng theo dõi và nhận diện đầu bổ sung.

               Không chỉ nâng cao về tính năng AF, Panasonic Lumix GH5S Firmware Version 2.0 cũng sẽ có thể tự động quay và phát video dọc cho các kênh mạng xã hội.

               Panasonic Lumix G9 được cải thiện AF và quay video dọc
               Phiên bản firmware 2.4 cho Panasonic Lumix G9 cũng được bổ sung công nghệ AF và hiệu suất của Lumix S5 với khả năng nhận diện khuôn mặt, mắt, người và động vật nhanh hơn. Cùng với bổ sung nhận diện đầu để cải thiện hiệu suất theo dõi lấy nét.
               Panasonic Lumix G100 ghi hình dọc
               Tính năng ghi hình dọc rõ ràng là một thiếu sót khi phiên bản firmware gốc của máy ảnh Lumix G100 đã không trang bị nó. Tuy nhiên, phiên bản Firmware 1.2 cho Panasonic Lumix G100 đã bổ sung thêm tính năng này, cho phép máy ảnh quay video dọc mà không cần tự động điều chỉnh hướng. Đồng thời, giờ đây Lumix G100 cũng sẽ được PC nhận dạng khi kết nối thông qua cáp USB.
               Có thể thấy trên đây là một loạt những cập nhật đáng giá và thú vị mang tới trải nghiệm tối ưu hơn cho người dùng. Tuy nhiên, các bản cập nhật firmware của Lumix G9 và G100 có vẻ giống với các bản sửa lỗi hơn, trong khi bản cập nhật Lumix GH5S  lại bổ sung nhiều tính năng quan trọng cho máy ảnh. Bởi vậy với lần cập nhật lần này, có thể GH5S sẽ tiếp tục duy trì vị trí của mình cùng với Lumix GH5 II mới và Lumix GH6 sắp tới.',
            ],
            [
                'maloaitin'=>2,
                'tentin'=>'[Rò rỉ] Panasonic Lumix S1H II Có Thể Quay Video 8K',
                'hinhanh'=>'tin2.jpg',
                'noidung'=>'Các thông số kỹ thuật được đồn đại về Panasonic Lumix S1H II cho thấy Panasonic sắp cho ra mắt máy ảnh mới và có vẻ như một trong những máy ảnh 4K tốt nhất của thương hiệu này có thể được nâng cấp với khả năng quay video 8K.

                Panasonic’s Lumix S1H là một trong những máy quay video yêu thích của nhiều người với khả năng quay video 6K 10 bit màu. Mới đây, những thông số kỹ thuật được rò rỉ cho thấy máy ảnh sắp tới của Panasonic là Panasonic Lumix S1H II có thể quay video 8K/24p và 6K/60p, 4K/180p và FHD ở 300p. Đây được coi như một bản nâng cấp so với Lumix S1H khi máy ảnh này chỉ có thể quay video 6K/24p và 4K/60p.
                Đáng chú ý trong thông số rò rỉ của Panasonic Lumix S1H II chính là việc máy ảnh có thể quay video 8K/24p nhưng lại trang bị cảm biến full frame 24MP giống như Panasonic Lumix S1H. Điều này đã khiến nhiều người dùng thắc mắc vì nếu muốn quay video 8K, máy ảnh ít nhất phải có cảm biến từ 33MP trở lên. Với sự mâu thuẫn giữa độ phân giải cảm biến và khả năng quay video 8K trên máy ảnh này chắc chắn sẽ mở ra một cuộc thảo luận thú vị về những gì Panasonic sẽ đưa vào trong chiếc máy ảnh mới này. Vì thế đây có thể là thông tin chưa chính xác về cảm biến và từ giờ cho đến lúc máy ảnh đươc ra mắt thì các thông tin về cảm biến có thể thay đổi.

                Khả năng quay video 8K của Panasonic Lumix S1H II có thể là tính năng nổi bật nhất, nhưng bên cạnh đó vẫn còn nhiều điều đáng mong đợi như khả năng tự động lấy nét, V-Log mang đến khả năng kiểm soát đối tượng tốt hơn, hỗ trợ tốt nhất cho quá trình quay video.

                Hiện tại, tất cả những thông tin về Panasonic Lumix S1H II vẫn chỉ là tin đồn và chúng ta cần chờ đợi thêm cho đến khi Panasonic công bố thông tin chính thức về sản phẩm này. Hãy cùng VJShop chờ đợi sự xuất hiện của chiếc máy ảnh này nhé!'
            ],
            // [
            //     'maloaitin'=>3,
            //     'tentin'=>'Canon Cho Biết Thị Trường Máy Ảnh Đang Đến Điểm Bão Hòa',
            //     'hinhanh'=>'tin3.jpg',
            //     'noidung'=>'Canon đã nâng mức dự báo cho phần còn lại của năm 2021 sau khi nhận thấy doanh số bán máy ảnh tăng 34% so với cùng chu kỳ bán hàng do đại dịch năm trước. Mặc dù là một tin tốt nhưng công ty cho biết thêm rằng thị trường máy ảnh đang đạt đến ngưỡng bão hòa.

            //     Là một phần của kết quả tài chính quý đầu tiên, Canon đã cập nhật dự đoán doanh số năm 2021 của mình sẽ tăng nhẹ vì doanh thu cao hơn đáng kể so với cùng thời điểm năm ngoái và doanh số bán hàng vẫn đang “rất mạnh”.
            //     Theo dữ liệu của CIPA, có vẻ như phần lớn sự tăng trưởng này là do giá bán trung bình trên mỗi máy ảnh đều tăng lên. Khi so sánh với tỷ lệ tăng trưởng đơn vị vào năm 2020, mức tăng khiêm tốn chỉ là 5%. Tất cả những điều này đều phù hợp với mục tiêu hướng tới các hệ thống máy ảnh mirrorless full-frame thay vì bán máy ảnh DSLR cấp thấp.

            //     Canon cho biết doanh số bán hàng của cả máy ảnh và ống kính đều vượt kế hoạch. Khả năng sinh lời được cải thiện đáng kể so với năm ngoái do giá bán trung bình tăng và hiệu quả bán hàng tăng, ngay cả khi tiếp tục hạn chế di chuyển trong làn sóng đại dịch, nhu cầu về máy ảnh vẫn được duy trì.
            //     Điều ấn tượng là những kết quả tài chính này cũng đến từ một phần cấu trúc kinh doanh mới của công ty nơi máy in phun được chuyển sang một đơn vị kinh doanh in ấn mới. Trớ trêu thay, nhu cầu và doanh số máy in phun cũng rất tốt vì theo Canon, công ty đã gặp khó khăn trong việc đáp ứng nhu cầu cho các mẫu máy gia đình trong thời kỳ đại dịch. Ngày càng có nhiều cơ hội và nhu cầu mua máy in tại nhà tốc độ cao, chi phí vận hành thấp và tiêu thụ năng lượng thấp.

            //     Tất cả những điều đó đều nói lên những kỳ vọng mà Canon đã nung nấu. Theo ghi nhận của Inside Imaging, công ty tin rằng hầu như tất cả những ai muốn có một chiếc máy ảnh kỹ thuật số chất lượng tốt – đặc biệt là về hình ảnh – đều có thể sắm được một chiếc.
            //     Ngoài ra, Canon cũng cho biết thị trường có khả năng bị “co lại” khi số lượng người quan tâm đến việc mua một chiếc máy ảnh mới tiếp tục giảm, và quy mô của thị trường máy ảnh đã tiếp cận gần tới số lượng người dùng đang có trải nghiệm trực quan về thiết bị. Công ty tin rằng các nhà sản xuất như chính họ nên xây dựng mối quan hệ chặt chẽ hơn với những khách hàng sở hữu máy ảnh hiện tại và tập trung vào việc nâng cấp máy ảnh, ống kính và bán thêm các phụ kiện để duy trì lợi nhuận.

            //     Sự cởi mở của Canon về tương lai của thị trường máy ảnh đang được làm mới, đặc biệt là vì công ty dường như không dựa vào một sản phẩm chủ lực để thúc đẩy doanh số. Thay vào đó, Canon tập trung vào việc xây dựng các phân khúc mới để mở rộng thị trường.
            //     Gần đây, Canon đã công bố phát triển ba ống kính RF mới và máy ảnh EOS R3 mới sẽ được trang bị cảm biến CMOS xếp chồng chiếu sáng mặt sau, có thể xử lý tín hiệu tốc độ cao và cho phép thực hiện một số cải tiến chức năng khác.

            //     Sự đầu tư tiếp tục này vào dòng R sẽ tiếp tục nâng cao thị phần trong dong máy ảnh full-frame và tăng doanh số bán hàng, bất chấp điều chắc chắn sẽ xảy ra là sự cạnh tranh gay gắt giữa các nhà bán lẻ lớn. Canon cũng đang tích cực thử những sản phẩm mới như PowerShot Zoom và PowerShot Pick trong nỗ lực tạo ra thị trường mới và mở rộng ra khỏi lĩnh vực hình ảnh truyền thống.'
            // ],
        ]);
    }
}
