# Bài tập 1: Xây dựng lớp Car
Tạo một lớp Car với các thuộc tính như:

Màu xe (color)
Tên xe (brand)
Vận tốc hiện tại (speed)
Thêm các phương thức:

Phương thức khởi tạo (__construct) để gán giá trị ban đầu cho màu và tên xe.
Phương thức để thay đổi màu xe (changeColor).
Phương thức tăng tốc xe (accelerate).
Phương thức dừng xe (brake).

# Bài tập 2: Xây dựng lớp kế thừa ElectricCar
Tạo một lớp con ElectricCar kế thừa từ lớp Car và thêm các thuộc tính và phương thức mới:

Thuộc tính về pin xe (batteryLevel).
Phương thức để sạc pin (chargeBattery)

# Bài tập 3: Xây dựng lớp Person và tương tác với lớp khác
Tạo lớp Person có các thuộc tính và phương thức:

Thuộc tính: tên (name), tuổi (age).
Phương thức: lái xe (driveCar), nhận vào một đối tượng Car và in ra thông tin về chiếc xe mà người này đang lái.

# Bài tập 4: Xây dựng lớp Animal và kế thừa
Tạo một lớp Animal với các thuộc tính và phương thức chung, sau đó tạo các lớp con kế thừa từ Animal như Dog, Cat, v.v.

Thuộc tính: tên (name), loại động vật (species).
Phương thức: phương thức âm thanh (makeSound), mỗi loài động vật có thể có âm thanh khác nhau.

# Bài tập 5: Tạo một lớp tĩnh (Static Class)
Tạo một lớp Calculator với các phương thức tĩnh để thực hiện các phép toán cộng, trừ, nhân, chia.

# Bài tập 6: Sử dụng Abstract Class
Tạo một lớp trừu tượng Shape (hình học) với một phương thức trừu tượng để tính diện tích. Sau đó, tạo các lớp con như Circle (hình tròn) và Rectangle (hình chữ nhật) kế thừa từ lớp Shape và cài đặt phương thức tính diện tích.

# Bài tập 7: Sử dụng Interface
Tạo một interface có tên là Movable để định nghĩa các phương thức liên quan đến việc di chuyển. Sau đó, tạo các lớp như Car và Bicycle để cài đặt interface này.

# Bài tập 8: Sử dụng Abstract Class và Interface cùng nhau
Tạo một lớp trừu tượng Animal với một phương thức trừu tượng makeSound(), đồng thời sử dụng một interface tên là Pet với các phương thức như play(). Sau đó, tạo lớp Dog và Cat kế thừa từ Animal và cài đặt Pet.

# Bài tập 9: Sử dụng nhiều Interface
Tạo các interface khác nhau như Flyable (có khả năng bay) và Swimmable (có khả năng bơi). Tạo các lớp Bird, Fish và Duck, trong đó Duck sẽ cài đặt cả hai interface.

# Bài tập 10: Hệ thống quản lý phương tiện giao thông (Vehicle Management System)
1. Mô tả bài tập:
Bạn sẽ xây dựng một hệ thống quản lý phương tiện giao thông, bao gồm các loại phương tiện khác nhau như ô tô, xe đạp, và xe máy. Mỗi loại phương tiện có cách hoạt động khác nhau, và một số loại phương tiện có thể là phương tiện điện.

2. Yêu cầu:
Abstract Class Vehicle:
- Tạo một lớp trừu tượng Vehicle đại diện cho một phương tiện giao thông.
- Lớp này có các thuộc tính chung:
    + name (tên phương tiện)
    + maxSpeed (vận tốc tối đa)
- Lớp này có phương thức trừu tượng move(), yêu cầu các lớp con phải cài đặt lại để mô tả cách chúng di chuyển.

Interface Electric:
- Tạo một interface tên là Electric, định nghĩa phương thức charge() để mô tả việc sạc pin cho các phương tiện điện.

Lớp con kế thừa Car, Bicycle, Motorcycle:
- Tạo lớp Car kế thừa từ Vehicle và cài đặt Electric để mô tả ô tô điện.
- Tạo lớp Bicycle kế thừa từ Vehicle để mô tả xe đạp.
- Tạo lớp Motorcycle kế thừa từ Vehicle và không cài đặt Electric vì nó không phải là phương tiện điện.

Lớp Person:
- Tạo lớp Person với các thuộc tính:
    + name (tên người)
    + age (tuổi)
- Phương thức drive(Vehicle $vehicle) để mô tả người đó điều khiển phương tiện.

Quản lý phương tiện: VehicleManager:
- Tạo lớp VehicleManager để quản lý các phương tiện, với các phương thức:
    + addVehicle(Vehicle $vehicle) để thêm phương tiện vào danh sách.
    + showAllVehicles() để hiển thị tất cả phương tiện và cách chúng di chuyển.
