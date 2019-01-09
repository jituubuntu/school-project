
plugin.tx_basicschool_student {
    view {
        # cat=plugin.tx_basicschool_student/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:basic_school/Resources/Private/Templates/
        # cat=plugin.tx_basicschool_student/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:basic_school/Resources/Private/Partials/
        # cat=plugin.tx_basicschool_student/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:basic_school/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_basicschool_student//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_basicschool_teacher {
    view {
        # cat=plugin.tx_basicschool_teacher/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:basic_school/Resources/Private/Templates/
        # cat=plugin.tx_basicschool_teacher/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:basic_school/Resources/Private/Partials/
        # cat=plugin.tx_basicschool_teacher/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:basic_school/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_basicschool_teacher//a; type=string; label=Default storage PID
        storagePid =
    }
}
