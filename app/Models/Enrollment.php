public function user()
{
    return $this->belongsTo(User::class);
}

public function course()
{
    return $this->belongsTo(Course::class);
}