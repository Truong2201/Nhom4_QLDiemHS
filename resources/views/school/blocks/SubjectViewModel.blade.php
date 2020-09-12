<script type="text/javascript">
    function SubjectViewModel(SubjectName, SubjectInfo) {
        this.SubjectName = ko.observable(SubjectName);
        this.SubjectInfo = SubjectInfo
    }
    function Cell(subjectName, color, date, detail) {
        this.subjectName = ko.observable(subjectName);
        this.color = ko.observable(color);
        this.date = date;
        this.detail = detail;
    }
    function OrderViewModel(name, sectionName) {
        this.name = name;
        this.sectionName = ko.observable(sectionName);
        this.cells = ko.observableArray([
            new Cell('', '#000000', 2),
            new Cell('', '#000000', 3),
            new Cell('', '#000000', 4),
            new Cell('', '#000000', 5),
            new Cell('', '#000000', 6),
            new Cell('', '#000000', 7),
            new Cell('', '#000000', 8),
        ]);
        this.getCell = function (cellDate) {
            return ko.utils.arrayFirst(this.cells(), function (cell) {
                return cell.date === cellDate;
            })
        }
    }
    function SectionViewModel(name) {
        this.name = ko.observable(name);
        this.orders = ko.observableArray([
            new OrderViewModel(1, this.name()),
            new OrderViewModel(2, this.name()),
            new OrderViewModel(3, this.name()),
            new OrderViewModel(4, this.name()),
            new OrderViewModel(5, this.name())
        ]);
        this.getOrder = function (orderName) {
            return ko.utils.arrayFirst(this.orders(), function (order) {
                return order.name === orderName;
            })
        }
    }
    function ScheduleViewModel(scheduler) {
        var _self = this;
        this.sections = ko.observableArray();

        this.hasScheduler = ko.observable(false);
        if(scheduler.length==0) this.hasScheduler(false);
        else this.hasScheduler(true);

        this.getSection = function (sectionName) {
            var result = this.searchSection(sectionName);
            if (result === null) {
                var result = new SectionViewModel(sectionName);
                this.addSection(result);
            }
            return result;
        }
        this.addSection = function (section) {
            this.sections.push(section);
            this.sections.sort(function (a, b) {
                return (getSectionNumber(a.name()) > getSectionNumber(b.name())) ? 1 : -1;
            });
        }
        this.searchSection = function (sectionName) {
            return ko.utils.arrayFirst(this.sections(), function (section) {
                return section.name() === sectionName;
            })
        }
        
        $.each(scheduler, function (index, value) {
            var section = _self.getSection(getSectionName(value.section));
            var order = section.getOrder(value.subjectOrder);
            var cell = order.getCell(value.dateOfWeek);
            cell.subjectName(value.subjectName);
            cell.color(value.color);
        })
    }
    getSectionName = function (sectionNumber) {
        switch (sectionNumber) {
            case 1: return 'Sáng';
            case 2: return 'Chiều';
            case 3: return 'Tối';
            default: return 'Khác';
        }
    }

    getSectionNumber = function (sectionName) {
        switch (sectionName) {
            case 'Sáng': return 1;
            case 'Chiều': return 2;
            case 'Tối': return 3;
            default: return 4;
        }
    }

    var scheduleViewModel = null;
    $(function () {
        scheduleViewModel = new ScheduleViewModel(scheduler);
        ko.applyBindings(scheduleViewModel, document.getElementById('schedule'));
    })
</script>