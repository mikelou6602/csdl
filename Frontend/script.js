const patientData = [
    {
        id: 1,
        name: 'Nguyễn Văn A',
        dateOfBirth: '1993-05-10',
        gender: 'Nam',
        address: 'Hà Nội',
        email: 'nguyenvana@gmail.com',
        medicalHistory: 'Tiền sử bệnh đa dạng'
    },
    {
        id: 2,
        name: 'Trần Thị B',
        dateOfBirth: '1998-02-15',
        gender: 'Nữ',
        address: 'Hồ Chí Minh',
        email: 'tranthib@gmail.com',
        medicalHistory: 'Tiền sử bệnh tim mạch'
    },
    // Thêm dữ liệu bệnh nhân khác ở đây
];

const doctorData = [
    {
        id: 1,
        name: 'Bác Sĩ X',
        dateOfBirth: '1985-12-30',
        gender: 'Nam',
        email: 'bacsix@gmail.com'
    },
    {
        id: 2,
        name: 'Bác Sĩ Y',
        dateOfBirth: '1990-07-25',
        gender: 'Nữ',
        email: 'bacsiy@gmail.com'
    },
    // Thêm dữ liệu bác sĩ khác ở đây
];

const appointmentData = [
    {
        id: 1,
        patientId: 1,
        doctorId: 1,
        date: '2023-09-15',
        workTime: '08:00 - 12:00',
        breakTime: '12:00 - 13:00',
        status: 'Đã hoàn thành'
    },
    {
        id: 2,
        patientId: 2,
        doctorId: 2,
        date: '2023-09-16',
        workTime: '09:00 - 13:00',
        breakTime: '13:00 - 14:00',
        status: 'Chưa hoàn thành'
    },
    // Thêm dữ liệu lịch hẹn khác ở đây
];

const diagnosisData = [
    {
        id: 1,
        date: '2023-09-15',
        reason: 'Đau bụng',
        symptoms: 'Buồn nôn, đau bụng dữ dội'
    },
    {
        id: 2,
        date: '2023-09-16',
        reason: 'Sốt cao',
        symptoms: 'Nóng, mệt mỏi, đau đầu'
    },
    // Thêm dữ liệu chẩn đoán khác ở đây
];