
<link rel="stylesheet" href="{{ asset('css/content.css') }}">
<link rel="stylesheet" href="{{ asset('css/aside.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<aside style="opacity: 0; pointer-events:none;">
    <div id="Anomali"></div>
    <div id="Home" class="Link"></div>
    <div id="Note" class="Link"></div>
    <div id="ToDo" class="Link"></div>
    <div id="Team" class="Link"></div>
</aside>


<div class="Container">
<div id="HomeSection">
    <h1>Home</h1>
    
    <div class="home-content">
        <div class="welcome-message">
            <h2>Welcome back, User!</h2>
            <p>You have <strong>2 pending tasks</strong> and <strong>3 new notes</strong> today.</p>
        </div>
        
        <div class="quick-actions">

            <!-- Note Card -->
            <div class="action-card" onclick="location.href='#'">
                <i class="fas fa-edit"></i>
                <h3>Notes</h3>
                <div class="card-preview">
                    <div class="preview-item">
                        <span class="bullet">•</span>
                        <span>Meeting notes</span>
                    </div>
                    <div class="preview-item">
                        <span class="bullet">•</span>
                        <span>Project ideas</span>
                    </div>
                    <div class="preview-item">
                        <span class="bullet">•</span>
                        <span>Weekly agenda</span>
                    </div>
                </div>
                <span class="status-badge pending">3 New</span>
            </div>
            
            <!-- To-Do Card -->
            <div class="action-card" onclick="location.href='#'">
                <i class="fas fa-check-circle"></i>
                <h3>To-Do</h3>
                <div class="card-preview">
                    <div class="todo-item completed">
                        <i class="fas fa-check-circle"></i>
                        <span>Buy groceries</span>
                    </div>
                    <div class="todo-item">
                        <i class="far fa-circle"></i>
                        <span>Call client</span>
                    </div>
                    <div class="todo-item">
                        <i class="far fa-circle"></i>
                        <span>Send report</span>
                    </div>
                </div>
                <span class="status-badge completed">1/3 Done</span>
            </div>
            
            <!-- Team Manage Card -->
            <div class="action-card" onclick="location.href='#'">
                <i class="fas fa-users"></i>
                <h3>Team</h3>
                <div class="card-preview">
                    <div class="team-member">
                        <span class="avatar">JD</span>
                        <span>Affan Suhendar (Owner)</span>
                    </div>
                    <div class="team-member">
                        <span class="avatar">SM</span>
                        <span>Muhammad Faruqi (Editor)</span>
                    </div>
                </div>
                <span class="status-badge pending">2 Members</span>
            </div>
        </div>
    </div>
</div>

        <div id="NoteSection">
            <h1>Note</h1>
            
            <div class="note-container">

                <!-- Sidebar Kategori -->
                <div class="note-sidebar">
                    <div class="sidebar-header">
                        <h3>CATEGORIES</h3>
                        <button class="add-btn" title="Add new category">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <ul class="category-list">
                        <li class="active">
                            <i class="fas fa-inbox"></i>
                            <span>All Notes</span>
                            <span class="count">24</span>
                        </li>
                        <li>
                            <i class="fas fa-lightbulb"></i>
                            <span>Ideas</span>
                            <span class="count">5</span>
                        </li>
                        <li>
                            <i class="fas fa-briefcase"></i>
                            <span>Work</span>
                            <span class="count">12</span>
                        </li>
                        <li>
                            <i class="fas fa-heart"></i>
                            <span>Personal</span>
                            <span class="count">7</span>
                        </li>
                    </ul>
                    
                    <div class="sidebar-footer">
                        <div class="storage-status">
                            <div class="progress-bar">
                                <div class="progress" style="width: 65%"></div>
                            </div>
                            <span>65% used</span>
                        </div>
                    </div>
                </div>
                
                <!-- Daftar Note -->
                <div class="note-list">
                    <div class="list-header">
                        <h3>RECENT NOTES</h3>
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search notes...">
                        </div>
                        <button class="new-note-btn">
                            <i class="fas fa-plus"></i> New Note
                        </button>
                    </div>
                    
                    <div class="notes-grid">
                        <!-- Note Card 1 -->
                        <div class="note-card featured">
                            <div class="card-header">
                                <h4>Project Brainstorm</h4>
                                <div class="card-actions">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <p>Ideas for the new marketing campaign and product features we discussed in yesterday's meeting...</p>
                            </div>
                            <div class="card-footer">
                                <span class="tag work">Work</span>
                                <span class="date">Today, 10:30 AM</span>
                            </div>
                        </div>
                        
                        <!-- Note Card 2 -->
                        <div class="note-card">
                            <div class="card-header">
                                <h4>Weekly Shopping List</h4>
                                <div class="card-actions">
                                    <i class="far fa-star"></i>
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <ul class="checklist">
                                    <li><i class="far fa-square"></i> Milk</li>
                                    <li><i class="far fa-square"></i> Eggs</li>
                                    <li><i class="far fa-square"></i> Bread</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <span class="tag personal">Personal</span>
                                <span class="date">Yesterday</span>
                            </div>
                        </div>
                        
                        <!-- Note Card 3 -->
                        <div class="note-card">
                            <div class="card-header">
                                <h4>UI Design Inspiration</h4>
                                <div class="card-actions">
                                    <i class="far fa-star"></i>
                                    <i class="fas fa-ellipsis-h"></i>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="image-preview">
                                    <img src="https://via.placeholder.com/150" alt="UI Screenshot">
                                </div>
                            </div>
                            <div class="card-footer">
                                <span class="tag ideas">Ideas</span>
                                <span class="date">Apr 12, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Note Editor (akan muncul ketika note dipilih) -->
                <div class="note-editor">
                    <div class="editor-header">
                        <input type="text" class="note-title" value="Project Brainstorm" placeholder="Note Title">
                        <div class="editor-actions">
                            <button class="action-btn"><i class="fas fa-share-alt"></i></button>
                            <button class="action-btn"><i class="fas fa-trash-alt"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    
                    <div class="editor-toolbar">
                        <button><i class="fas fa-bold"></i></button>
                        <button><i class="fas fa-italic"></i></button>
                        <button><i class="fas fa-list-ul"></i></button>
                        <button><i class="fas fa-list-ol"></i></button>
                        <button><i class="fas fa-link"></i></button>
                        <button><i class="fas fa-image"></i></button>
                    </div>
                    
                    <div class="editor-content" contenteditable="true">
                        <h3>Marketing Campaign Ideas</h3>
                        <p>1. Social media challenge with hashtag #OurNewProduct</p>
                        <p>2. Influencer collaboration program</p>
                        <p>3. Limited-time early bird discount</p>
                        
                        <h3>Product Features</h3>
                        <ul>
                            <li>Dark mode support</li>
                            <li>Customizable dashboard</li>
                            <li>Advanced analytics</li>
                        </ul>
                    </div>
                    
                    <div class="editor-footer">
                        <span>Last saved: Just now</span>
                        <button class="save-btn">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="TodoSection">
        <h1>To-Do</h1>
        
        <div class="todo-container">
            <!-- Task Header -->
            <div class="todo-header">
                <div class="stats-card">
                    <i class="fas fa-calendar-check"></i>
                    <div>
                        <span class="count">12</span>
                        <span class="label">Today</span>
                    </div>
                </div>
                <div class="stats-card primary">
                    <i class="fas fa-clock"></i>
                    <div>
                        <span class="count">5</span>
                        <span class="label">Overdue</span>
                    </div>
                </div>
                <div class="stats-card">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span class="count">28</span>
                        <span class="label">Completed</span>
                    </div>
                </div>
            </div>
            
            <!-- Main Content Area -->
            <div class="todo-content">
                <!-- Task Lists Sidebar -->
                <div class="todo-sidebar">
                    <div class="list-header">
                        <h3>TASK LISTS</h3>
                        <button class="add-btn"><i class="fas fa-plus"></i></button>
                    </div>
                    <ul class="task-lists">
                        <li class="active">
                            <i class="fas fa-inbox"></i>
                            <span>Inbox</span>
                            <span class="count">7</span>
                        </li>
                        <li>
                            <i class="fas fa-briefcase"></i>
                            <span>Work</span>
                            <span class="count">4</span>
                        </li>
                        <li>
                            <i class="fas fa-home"></i>
                            <span>Personal</span>
                            <span class="count">3</span>
                        </li>
                        <li>
                            <i class="fas fa-shopping-cart"></i>
                            <span>Shopping</span>
                            <span class="count">5</span>
                        </li>
                    </ul>
                    
                    <div class="tags-section">
                        <h3>TAGS</h3>
                        <div class="tags-container">
                            <span class="tag" style="--tag-color: #ff5252;">
                                <i class="fas fa-tag"></i> Urgent
                            </span>
                            <span class="tag" style="--tag-color: #4caf50;">
                                <i class="fas fa-tag"></i> Low Priority
                            </span>
                            <span class="tag" style="--tag-color: #2196f3;">
                                <i class="fas fa-tag"></i> Research
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Task List Main Area -->
                <div class="task-list">
                    <div class="list-controls">
                        <h2>Inbox</h2>
                        <div class="controls-right">
                            <div class="search-box">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search tasks...">
                            </div>
                            <div class="view-options">
                                <button class="view-btn active"><i class="fas fa-list-ul"></i></button>
                                <button class="view-btn"><i class="fas fa-calendar-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="task-filters">
                        <button class="filter-btn active">All</button>
                        <button class="filter-btn">Active</button>
                        <button class="filter-btn">Completed</button>
                        <button class="filter-btn">Today</button>
                    </div>
                    
                    <div class="task-input">
                        <input type="text" placeholder="Add a new task...">
                        <button class="add-task-btn"><i class="fas fa-plus"></i></button>
                    </div>
                    
                    <div class="tasks-container">
                        <!-- Task Group: Today -->
                        <div class="task-group">
                            <div class="group-header">
                                <i class="fas fa-sun"></i>
                                <h3>Today</h3>
                                <span class="task-count">3 tasks</span>
                            </div>
                            
                            <div class="task-item priority-high">
                                <label class="checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="task-content">
                                    <div class="task-title">Finish project presentation</div>
                                    <div class="task-meta">
                                        <span class="due-date">Due today</span>
                                        <span class="tag" style="--tag-color: #ff5252;">Urgent</span>
                                    </div>
                                </div>
                                <div class="task-actions">
                                    <button class="star-btn"><i class="fas fa-star"></i></button>
                                    <button class="more-btn"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                            
                            <div class="task-item">
                                <label class="checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="task-content">
                                    <div class="task-title">Call with marketing team</div>
                                    <div class="task-meta">
                                        <span class="due-date">Today, 2:00 PM</span>
                                        <span class="tag" style="--tag-color: #2196f3;">Work</span>
                                    </div>
                                </div>
                                <div class="task-actions">
                                    <button class="star-btn"><i class="far fa-star"></i></button>
                                    <button class="more-btn"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Task Group: Overdue -->
                        <div class="task-group">
                            <div class="group-header overdue">
                                <i class="fas fa-exclamation-circle"></i>
                                <h3>Overdue</h3>
                                <span class="task-count">2 tasks</span>
                            </div>
                            
                            <div class="task-item overdue">
                                <label class="checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="task-content">
                                    <div class="task-title">Pay electricity bill</div>
                                    <div class="task-meta">
                                        <span class="due-date">Due yesterday</span>
                                        <span class="tag" style="--tag-color: #ff9800;">Personal</span>
                                    </div>
                                </div>
                                <div class="task-actions">
                                    <button class="star-btn"><i class="far fa-star"></i></button>
                                    <button class="more-btn"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Task Group: Upcoming -->
                        <div class="task-group">
                            <div class="group-header">
                                <i class="fas fa-calendar-day"></i>
                                <h3>Upcoming</h3>
                                <span class="task-count">4 tasks</span>
                            </div>
                            
                            <div class="task-item">
                                <label class="checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="task-content">
                                    <div class="task-title">Prepare for client meeting</div>
                                    <div class="task-meta">
                                        <span class="due-date">Tomorrow, 9:00 AM</span>
                                        <span class="tag" style="--tag-color: #2196f3;">Work</span>
                                    </div>
                                </div>
                                <div class="task-actions">
                                    <button class="star-btn"><i class="far fa-star"></i></button>
                                    <button class="more-btn"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                            
                            <div class="task-item priority-medium">
                                <label class="checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="task-content">
                                    <div class="task-title">Buy birthday gift for Sarah</div>
                                    <div class="task-meta">
                                        <span class="due-date">Fri, Apr 15</span>
                                        <span class="tag" style="--tag-color: #e91e63;">Personal</span>
                                    </div>
                                </div>
                                <div class="task-actions">
                                    <button class="star-btn"><i class="fas fa-star"></i></button>
                                    <button class="more-btn"><i class="fas fa-ellipsis-h"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Task Detail Panel -->
                <div class="task-detail">
                    <div class="detail-header">
                        <h3>Task Details</h3>
                        <button class="close-btn"><i class="fas fa-times"></i></button>
                    </div>
                    
                    <div class="detail-content">
                        <div class="detail-title">
                            <label class="checkbox-container">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                            <h4>Finish project presentation</h4>
                        </div>
                        
                        <div class="detail-section">
                            <div class="section-header">
                                <i class="fas fa-align-left"></i>
                                <h5>Description</h5>
                            </div>
                            <div class="section-content">
                                <p>Prepare slides for the quarterly review meeting with executives. Include performance metrics, new initiatives, and roadmap.</p>
                            </div>
                        </div>
                        
                        <div class="detail-section">
                            <div class="section-header">
                                <i class="fas fa-calendar-alt"></i>
                                <h5>Due Date</h5>
                            </div>
                            <div class="section-content">
                                <span class="due-date-tag">Today, 5:00 PM</span>
                            </div>
                        </div>
                        
                        <div class="detail-section">
                            <div class="section-header">
                                <i class="fas fa-tag"></i>
                                <h5>Tags</h5>
                            </div>
                            <div class="section-content">
                                <span class="tag" style="--tag-color: #ff5252;">Urgent</span>
                                <span class="tag" style="--tag-color: #2196f3;">Work</span>
                            </div>
                        </div>
                        
                        <div class="detail-section">
                            <div class="section-header">
                                <i class="fas fa-paperclip"></i>
                                <h5>Attachments</h5>
                            </div>
                            <div class="section-content">
                                <div class="attachment">
                                    <i class="fas fa-file-powerpoint"></i>
                                    <span>Q1_Report.pptx</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="detail-actions">
                            <button class="save-btn"><i class="fas fa-save"></i> Save Changes</button>
                            <button class="delete-btn"><i class="fas fa-trash-alt"></i> Delete Task</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="TeamSection">
    <h1>Team</h1>
    
    <div class="team-container">

        <!-- Team Header -->
        <div class="team-header">
            <div class="stats-card">
                <i class="fas fa-users"></i>
                <div>
                    <span class="count">8</span>
                    <span class="label">Team Members</span>
                </div>
            </div>
            <div class="stats-card primary">
                <i class="fas fa-tasks"></i>
                <div>
                    <span class="count">14</span>
                    <span class="label">Active Projects</span>
                </div>
            </div>
            <div class="stats-card">
                <i class="fas fa-comments"></i>
                <div>
                    <span class="count">23</span>
                    <span class="label">Unread Messages</span>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="team-content">

            <!-- Team Navigation Sidebar -->
            <div class="team-sidebar">
                <div class="team-menu">
                    <button class="menu-btn active">
                        <i class="fas fa-user-friends"></i>
                        <span>Members</span>
                    </button>
                    <button class="menu-btn">
                        <i class="fas fa-project-diagram"></i>
                        <span>Projects</span>
                    </button>
                    <button class="menu-btn">
                        <i class="fas fa-comments"></i>
                        <span>Discussions</span>
                    </button>
                    <button class="menu-btn">
                        <i class="fas fa-file-alt"></i>
                        <span>Documents</span>
                    </button>
                </div>
                
                <div class="team-projects">
                    <h3>RECENT PROJECTS</h3>
                    <ul class="project-list">
                        <li>
                            <div class="project-color" style="background: #4caf50;"></div>
                            <span>Website Redesign</span>
                        </li>
                        <li class="active">
                            <div class="project-color" style="background: #2196f3;"></div>
                            <span>Mobile App Launch</span>
                        </li>
                        <li>
                            <div class="project-color" style="background: #ff9800;"></div>
                            <span>Marketing Campaign</span>
                        </li>
                    </ul>
                </div>
                
                <div class="team-activity">
                    <h3>RECENT ACTIVITY</h3>
                    <div class="activity-item">
                        <div class="avatar">AS</div>
                        <div class="activity-content">
                            <p><strong>Affan SUhendar</strong> completed task <strong>"Design Review"</strong></p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="avatar">MF</div>
                        <div class="activity-content">
                            <p><strong>faruqi</strong> commented on <strong>"App Prototype"</strong></p>
                            <span class="activity-time">5 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Members Main -->
            <div class="team-main">
                <div class="team-toolbar">
                    <h2>Team Members</h2>
                    <div class="toolbar-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Search members...">
                        </div>
                        <button class="add-member-btn">
                            <i class="fas fa-plus"></i> Add Member
                        </button>
                    </div>
                </div>
                
                <div class="members-grid">
                    <!-- Team Member 1 -->
                    <div class="member-card">
                        <div class="member-avatar" style="background: #4caf50;">JD</div>
                        <div class="member-info">
                            <h4>Affan Suhendar</h4>
                            <span class="member-role">Team Lead</span>
                            <span class="member-status online">Online</span>
                        </div>
                        <div class="member-skills">
                            <span class="skill-tag">UI/UX</span>
                            <span class="skill-tag">Frontend</span>
                        </div>
                        <div class="member-actions">
                            <button class="action-btn"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    
                    <!-- Team Member 2 -->
                    <div class="member-card">
                        <div class="member-avatar" style="background: #2196f3;">SM</div>
                        <div class="member-info">
                            <h4>Muhammad Faruqi</h4>
                            <span class="member-role">Developer</span>
                            <span class="member-status online">Online</span>
                        </div>
                        <div class="member-skills">
                            <span class="skill-tag">Backend</span>
                            <span class="skill-tag">Database</span>
                        </div>
                        <div class="member-actions">
                            <button class="action-btn"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    
                    <!-- Team Member 3 -->
                    <div class="member-card">
                        <div class="member-avatar" style="background: #ff9800;">RJ</div>
                        <div class="member-info">
                            <h4>Diki</h4>
                            <span class="member-role">Designer</span>
                            <span class="member-status away">Away</span>
                        </div>
                        <div class="member-skills">
                            <span class="skill-tag">UI Design</span>
                            <span class="skill-tag">Illustration</span>
                        </div>
                        <div class="member-actions">
                            <button class="action-btn"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    
                    <!-- Team Member 4 -->
                    <div class="member-card">
                        <div class="member-avatar" style="background: #e91e63;">AM</div>
                        <div class="member-info">
                            <h4>Rizky slebew</h4>
                            <span class="member-role">Marketer</span>
                            <span class="member-status busy">In a meeting</span>
                        </div>
                        <div class="member-skills">
                            <span class="skill-tag">SEO</span>
                            <span class="skill-tag">Content</span>
                        </div>
                        <div class="member-actions">
                            <button class="action-btn"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                    
                    <!-- Team Member 5 -->
                    <div class="member-card">
                        <div class="member-avatar" style="background: #9c27b0;">DW</div>
                        <div class="member-info">
                            <h4>Sigma Boy</h4>
                            <span class="member-role">QA Engineer</span>
                            <span class="member-status offline">Offline</span>
                        </div>
                        <div class="member-skills">
                            <span class="skill-tag">Testing</span>
                            <span class="skill-tag">Automation</span>
                        </div>
                        <div class="member-actions">
                            <button class="action-btn"><i class="fas fa-envelope"></i></button>
                            <button class="action-btn"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Member -->
            <div class="team-detail">
                <div class="detail-header">
                    <h3>Member Profile</h3>
                    <button class="close-btn"><i class="fas fa-times"></i></button>
                </div>
                
                <div class="detail-content">
                    <div class="profile-header">
                        <div class="profile-avatar" style="background: #2196f3;">SM</div>
                        <div class="profile-info">
                            <h4>Affan Suhendar</h4>
                            <span class="profile-role">Senior Developer</span>
                            <span class="profile-status online">Online</span>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <h5>Contact Information</h5>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>affansuhendar1@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+62 815-3685-1347 </span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>Joined: Jan 15, 2022</span>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <h5>Skills & Expertise</h5>
                        <div class="skills-container">
                            <span class="skill-tag large">JavaScript</span>
                            <span class="skill-tag large">Node.js</span>
                            <span class="skill-tag large">React</span>
                            <span class="skill-tag large">MongoDB</span>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <h5>Current Projects</h5>
                        <div class="project-item">
                            <div class="project-color" style="background: #2196f3;"></div>
                            <span>Mobile App Launch</span>
                            <span class="project-progress">85%</span>
                        </div>
                        <div class="project-item">
                            <div class="project-color" style="background: #4caf50;"></div>
                            <span>API Integration</span>
                            <span class="project-progress">60%</span>
                        </div>
                    </div>
                    
                    <div class="detail-section">
                        <h5>Recent Activity</h5>
                        <div class="activity-item">
                            <i class="fas fa-code"></i>
                            <div>
                                <p>Completed task <strong>"User Authentication"</strong></p>
                                <span class="activity-time">Yesterday, 3:45 PM</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <i class="fas fa-comment"></i>
                            <div>
                                <p>Commented on <strong>"Database Schema"</strong></p>
                                <span class="activity-time">Yesterday, 11:20 AM</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="detail-actions">
                        <button class="message-btn"><i class="fas fa-envelope"></i> Send Message</button>
                        <button class="edit-btn"><i class="fas fa-user-edit"></i> Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('js/content.js') }}"></script>